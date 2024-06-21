<?php

use Illuminate\Support\Facades\Route;
use NexaMerchant\Webhooks\Http\Controllers\Api\ExampleController;

Route::group(['middleware' => ['api'], 'prefix' => 'api'], function () {
     Route::prefix('webhooks')->group(function () {

        Route::controller(ExampleController::class)->prefix('example')->group(function () {

            Route::get('demo', 'demo')->name('webhooks.api.example.demo');

        });

     });
});