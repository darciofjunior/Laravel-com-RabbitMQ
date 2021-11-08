<?php

use App\Http\Controllers\Api\{
    CategoryController,
    CompanyController
};
use App\Jobs\CompanyCreated;
use Illuminate\Support\Facades\Route;

Route::get('/test', function() {
    CompanyCreated::dispatch('test@email.com')->onQueue('queue_email');
});

Route::apiResource('categories', CategoryController::class);
Route::apiResource('companies', CompanyController::class);

Route::get('/', function () {
    return response()->json(['message' => 'success']);
});
