<?php

/**
 * @var \Dingo\Api\Routing\Router $api
 */

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
$api->get('/test', function() {
    dd("here");
});

$api->get('/fruits', 'App\Http\Controllers\FruitsController@index');