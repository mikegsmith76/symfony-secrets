<?php

require_once __DIR__ . "/../vendor/autoload.php";

$options = getopt("", [
    "handle:",
]);

if (empty($options["handle"])) {
    print "Usage: " . __FILE__ . " --handle={handle}" . PHP_EOL;
    exit;
}

$vault = new \Mysof\Secrets\SodiumVault(__DIR__ . "/../secrets/dev");
$value = $vault->reveal($options["handle"]);

if (null === $value) {
    print "Secret {$options["handle"]} not found." . PHP_EOL;
    exit;
}

print "Secret value: " . $value . PHP_EOL;
