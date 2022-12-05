<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/aluno','ControllerAluno@index');
Route::get('/aluno/create','ControllerAluno@create');
Route::post('/aluno','ControllerAluno@store');
Route::get('/aluno/{cd_rm_aluno}','ControllerAluno@show');
Route::get('/aluno/{cd_rm_aluno}/edit','ControllerAluno@edit');
Route::put('/aluno/{cd_rm_aluno}','ControllerAluno@update');
Route::delete('/aluno/{cd_rm_aluno}','ControllerAluno@destroy'); 


