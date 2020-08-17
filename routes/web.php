<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/get', function () use ($router) {
    return "Hi I am Refat";
});


$router->post('/post', function () use ($router) {
    return "Refat is post";
});


$router->put('/put', function () use ($router) {
    return "Refat is put";
});


$router->delete('/delete', function () use ($router) {
    return "Refat delete";
});

$router->post('/refat', function (){
    return "Refat is a good boy";

});
