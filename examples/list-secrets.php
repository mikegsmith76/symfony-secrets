<?php

require_once __DIR__ . "/../vendor/autoload.php";

$options = getopt("", [
    "reveal",
]);

$vault = new \Mysof\Secrets\SodiumVault(__DIR__ . "/../secrets/dev");
$secretList = $vault->list(isset($options["reveal"]));

foreach ($secretList as $handle => $value) {
    if (null === $value) {
        $value = "***";
    }

    print "{$handle}: $value" . PHP_EOL;
}

