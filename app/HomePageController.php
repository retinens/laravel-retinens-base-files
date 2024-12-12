<?php

namespace App\Website\Controllers;

class HomePageController
{
    public function index()
    {
        return view('app.pages.website.home');
    }
}
