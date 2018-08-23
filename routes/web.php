<?php declare(strict_types=1);

use Illuminate\Routing\Router;

Route::get('/', 'PageController@index')->name('index');

$router->post('callme', 'CallmeController@callme')->name('callme');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');