<?php

namespace App\Website\Controllers;

use App\Common\Controllers\Controller;

class HomePageController extends Controller
{
    public function index()
    {
        return view('app.pages.website.home');
    }
}
