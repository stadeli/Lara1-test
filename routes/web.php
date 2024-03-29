<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/', 'PagesController@home');
route::get('/about', 'PagesController@about');
route::get('/contact', 'PagesController@contact');
route::get('/projects', 'ProjectsController@index');
