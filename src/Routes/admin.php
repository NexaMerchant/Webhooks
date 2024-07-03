<?php

use Illuminate\Support\Facades\Route;
use NexaMerchant\Webhooks\Http\Controllers\Admin\ExampleController;
use NexaMerchant\Webhooks\Http\Controllers\Admin\SettingsController;

Route::group(['middleware' => ['admin','admin_option_log'], 'prefix' => config('app.admin_url')], function () {
    Route::prefix('webhooks')->group(function () {

        Route::controller(ExampleController::class)->prefix('example')->group(function () {

            Route::get('demo', 'demo')->name('webhooks.admin.example.demo');

        });


        Route::controller(SettingsController::class)->prefix('settings')->group(function () {

            Route::get('index', 'index')->name('webhooks.admin.settings.index');

        });

    });
});