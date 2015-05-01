<?php

$router->get('/', 'WelcomeController@index');

$router->resource(
    'login',
    'AuthController@index'
);

$router->group(['middleware' => ['auth']], function () use ($router) {

    $router->resource(
        'profile',
        'ProfileController'
    );
});