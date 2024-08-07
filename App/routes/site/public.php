<?php

use Pecee\SimpleRouter\SimpleRouter as Router;

// Controllers
use App\Controllers\Site\HomeController;

Router::get('/', HomeController::class . '@index');