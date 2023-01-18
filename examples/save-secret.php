<?php

require_once __DIR__ . "/../vendor/autoload.php";

$options = getopt("", [
    "handle:",
    "value:",
]);

if (empty($options["handle"]) || empty($options["value"])) {
    print "Usage: " . __FILE__ . " --handle={handle} --value={value}" . PHP_EOL;
    exit;
}

$vault = new \Mysof\Secrets\SodiumVault(__DIR__ . "/../secrets/dev");
$vault->seal($options["handle"], $options["value"]);
