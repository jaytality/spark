<?php
/**
 * route loader
 *
 * created: 2021-10-06
 * updated:
 *
 * @author Johnathan Tiong <johnathan.tiong@gmail.com>
 * @copyright 2021 Johnathan Tiong
 */

// load all the files from the routes/ folder
foreach (glob(ROOT."/routes/*.php") as $filename) {
    include $filename;
}

// ERROR: 404
$base->notFound(function () {
    \Core\Error::display('404');
});
