<?php

Route::get('/', function () {
    return view('app.pages.website.home');
})->name('home');

include 'admin.php';
include 'auth.php';
