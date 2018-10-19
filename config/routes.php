<?php

$router->get('', 'PageController@home');
$router->get('about', 'PageController@about');
$router->post('user', 'UserController@store');
