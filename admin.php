<?php

use App\Admin\Controllers\HomePageController;
use App\Admin\Middleware\AdminSeoMiddleware;
use App\Admin\Middleware\IsAdminMiddleware;
use App\Admin\Users\Controllers\AdminUsersController;

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', IsAdminMiddleware::class, AdminSeoMiddleware::class]], function () {
    Route::get('logs', [Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
    Route::get('/', HomePageController::class)->name('index');
    Route::resource('admin-users', AdminUsersController::class);
});
