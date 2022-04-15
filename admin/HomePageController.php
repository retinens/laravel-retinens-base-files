<?php

namespace App\Admin\Controllers;

use App\Common\Controllers\Controller;
use Illuminate\Contracts\View\View;

class HomePageController extends Controller
{
    public function __invoke(): View
    {
        return view('admin.pages.home');
    }
}
