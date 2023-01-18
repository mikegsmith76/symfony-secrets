<?php

require_once __DIR__ . "/../vendor/autoload.php";

$vault = new \Mysof\Secrets\SodiumVault(
    __DIR__ . "/../secrets/" . ($_SERVER["APP_RUNIME_ENV"] ?? "dev")
);
