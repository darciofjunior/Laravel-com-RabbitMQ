<?php

use Illuminate\Support\Facades\Route;
use DarciofJunior\MicroservicesCommon\Services\Traits\ConsumeExternalService;

/*Route::get('test', function (ConsumeExternalService $myPackage) {
    dd($myPackage->test());
});*/

Route::get('/', function () {
    return view('welcome');
});
