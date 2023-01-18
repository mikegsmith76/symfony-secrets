<?php

/**
 * @var  \Mysof\Secrets\SodiumVault $vault
 */
require_once "common.php";

$options = getopt("", [
    "handle:",
]);

if (empty($options["handle"])) {
    print "Usage: " . __FILE__ . " --handle={handle}" . PHP_EOL;
    exit;
}

$value = $vault->reveal($options["handle"]);

if (null === $value) {
    print "Secret {$options["handle"]} not found." . PHP_EOL;
    exit;
}

print "Secret value: " . $value . PHP_EOL;
