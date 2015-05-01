<?php

$router->get('/', 'WelcomeController@index');

$router->resource(
    'register',
    'RegisterController',
    [
        'only' => [
            'index', 'store'
        ]
    ]
);