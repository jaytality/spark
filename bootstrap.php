<?php

/**
 * bootstrap for database setup and interaction
 */

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Database Connection
 */
$capsule = new Capsule;

$capsule->addConnection([
    "driver"   => getConfig("database.type"),
    "host"     => getConfig("database.host"),
    "database" => getConfig("database.name"),
    "username" => getConfig("database.user"),
    "password" => getConfig("database.pass")
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

/**
 * Database Schema
 */
foreach (glob(ROOT."/schema/*.php") as $filename) {
    include $filename;
}
