<?php

/**
 * @var  \Mysof\Secrets\SodiumVault $vault
 */
require_once "common.php";

$options = getopt("", [
    "reveal",
]);

$secretList = $vault->list(isset($options["reveal"]));

foreach ($secretList as $handle => $value) {
    if (null === $value) {
        $value = "***";
    }

    print "{$handle}: $value" . PHP_EOL;
}

