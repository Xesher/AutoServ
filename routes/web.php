<?php declare(strict_types=1);

use Illuminate\Routing\Router;

Route::get('/', 'PageController@index')->name('index');
Route::get('/objects', 'PageController@object')->name('objects');
Route::get('/vacancy', 'PageController@vacancy')->name('vacancy');
Route::get('/news', 'PageController@news')->name('news');
$router->post('questionnaire', 'MailController@questionnaire')->name('questionnaire');
