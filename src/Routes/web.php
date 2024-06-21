<?php

use Illuminate\Support\Facades\Route;
use NexaMerchant\Webhooks\Http\Controllers\Web\ExampleController;

Route::group(['middleware' => ['locale', 'theme', 'currency'], 'prefix'=>'webhooks'], function () {

    Route::controller(ExampleController::class)->prefix('example')->group(function () {

        Route::get('demo', 'demo')->name('webhooks.web.example.demo');

    });

});

include "admin.php";