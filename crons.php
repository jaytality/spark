<?php

/**
 * crons lets you create PHP scripts within the site that can run based off the cron setup on the host
 *
 * the expectation is this cron file is called _every minute_ and this file will check the crons/ folder for
 * any scripts that need to run
 *
 * created: 2021-10-07
 * updated: 2021-10-11
 *
 * @author Johnathan Tiong <johnathan.tiong@gmail.com>
 * @copyright 2021 Johnathan Tiong
 */

class CronJob
{
    //
}

// load all the files from the crons/ folder
foreach (glob(ROOT."/crons/*.php") as $filename) {
    include $filename;
}
