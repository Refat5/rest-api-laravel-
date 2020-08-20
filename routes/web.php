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
//basic routing system

// $router->get('/get', function () use ($router) {
//     return "Hi I am Refat";
// });


// $router->post('/post', function () use ($router) {
//     return "Refat is post";
// });


// $router->put('/put', function () use ($router) {
//     return "Refat is put";
// });


// $router->delete('/delete', function () use ($router) {
//     return "Refat delete";
// });

// $router->post('/refat', function (){
//     return "Refat is a good boy";

// });

// $router->post('/{nvalue}/{age}[/{city}]',function($nvalue,$age,$city=null){
//     return $nvalue.$age.$city;

// });


// $router->get('/{name}','MYController@hello');
// $router->get('/','MYController@hello');

// $router->get('/refat','MYController@refat');
// $router->get('/tanvir','MYController@tanvir');
// $router->get('/download','MYController@download');


$router->post('/catch','MYController@Catch');




