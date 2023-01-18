<?php

/**
 * @var  \Mysof\Secrets\SodiumVault $vault
 */
require_once "common.php";

$options = getopt("", [
    "handle:",
    "value:",
]);

if (empty($options["handle"]) || empty($options["value"])) {
    print "Usage: " . __FILE__ . " --handle={handle} --value={value}" . PHP_EOL;
    exit;
}

$vault->seal($options["handle"], $options["value"]);
