<?php

use App\Website\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'index'])->name('home');

include 'admin.php';
include 'auth.php';
