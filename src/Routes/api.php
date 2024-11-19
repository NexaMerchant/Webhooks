<?php

use Illuminate\Support\Facades\Route;
use NexaMerchant\Webhooks\Http\Controllers\Api\WebhookController;

Route::group(['middleware' => ['api'], 'prefix' => 'api'], function () {
    // v1 webhooks
     Route::prefix('v1')->group(function () {

        Route::controller(WebhookController::class)->prefix('webhook')->group(function () {

            // Route::get('demo', 'demo')->name('webhooks.api.example.demo');

            Route::get('list', 'list')->name('webhooks.api.webhook.list');

            Route::get('get/{id}', 'get')->name('webhooks.api.webhook.get');

            Route::post('create', 'create')->name('webhooks.api.webhook.create');

            Route::put('update/{id}', 'update')->name('webhooks.api.webhook.update');

            Route::delete('delete/{id}', 'delete')->name('webhooks.api.webhook.delete');

            Route::post('test/{id}', 'test')->name('webhooks.api.webhook.test');

        });

     });
});