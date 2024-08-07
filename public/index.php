<?php

require_once __DIR__ . '/../bootstrap.php';

use Pecee\SimpleRouter\SimpleRouter as Router;

require_once __DIR__ . '/../App/routes/routes.php';

Router::start();