<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/
$this->router->get('/', 'HomeController@index');

$this->router->get('/test', 'HomeController@example');
