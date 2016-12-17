<?php

/*Route::get('/', function() {
    return view('welcome');
});*/

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->get('/', function() {
		return ['Fruits' => 'Delicious and healthy!'];
    });
});