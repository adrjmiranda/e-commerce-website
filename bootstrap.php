<?php

require_once __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

// Get .env params
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();