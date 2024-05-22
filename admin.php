<?php

use Illuminate\Support\Facades\Route;

use App\Admin\Controllers\HomePageController;
use App\Admin\Middleware\AdminSeoMiddleware;
use App\Admin\Middleware\IsAdminMiddleware;
use App\Admin\Users\Controllers\AdminUsersController;

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', IsAdminMiddleware::class, AdminSeoMiddleware::class]], function () {
    Route::get('/', HomePageController::class)->name('index');

    Route::post("admin-users/{adminUser}/reset-password", [AdminUsersController::class,'resetPassword'])->name('admin-users.reset-password');
    Route::resource('admin-users', AdminUsersController::class);
});
