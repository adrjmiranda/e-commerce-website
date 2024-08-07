<?php

namespace App\Controllers\Site;

use App\Core\Controller\Controller;
use App\Core\Template\View;

class HomeController extends Controller
{
  public function index()
  {
    $view = View::render('site/public/home.blade.php');
    echo $view;
  }
}