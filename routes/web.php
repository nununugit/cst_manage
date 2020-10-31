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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/cst2020/manage/attack','App\Http\Controllers\truncateController@attack');
Route::post('/cst2020/manage/attack/{team_id}','App\Http\Controllers\truncateController@attack_success');
Route::get('/cst2020/manage/{team_id}','App\Http\Controllers\teamController@team');
Route::post('/cst2020/manage/team_discount/{team_id}','App\Http\Controllers\teamController@team_discount');