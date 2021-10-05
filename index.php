<?php

/**
 * index.php
 * main application loader
 *
 * @author Johnathan Tiong <johnathan.tiong@gmail.com>
 * @copyright 2021-10-06
 */

session_start();

// root constant
define('ROOT', dirname(__FILE__));

// file location constants
define('ctrlr', ROOT.'/app/controllers');
define('model', ROOT.'/app/models');
define('views', ROOT.'/app/views');

// autoload composer
require 'vendor/autoload.php';

// configuration and ORM
require ROOT.'/config.php';

$base = new \Core\Base();

ini_set('log_errors', 1);

if (getConfig('debug')) {
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    ini_set('display_errors', 1);
}

// SITE TIMEZONE
date_default_timezone_set('Australia/Sydney');

include ROOT . '/bootstrap.php';
include ROOT . '/routing.php';
