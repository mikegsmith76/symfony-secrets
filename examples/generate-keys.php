<?php

require_once __DIR__ . "/../vendor/autoload.php";

$vault = new \Mysof\Secrets\SodiumVault(
    __DIR__ . "/../secrets/dev",
);

$vault->generateKeys();
