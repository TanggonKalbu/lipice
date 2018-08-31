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


Route::get('/', function () {
  return view('main');
});

Route::resource('kontestans', 'kontestan_controller');
Route::resource('profile', 'profile_controller');
Route::resource('about', 'about_controller');
Route::resource('admin', 'admin_controller');
Route::resource('adminchallenge', 'adminchallenge_controller');
Route::resource('cha_day1', 'cha_day1_controller');
Route::resource('cha_video', 'cha_video_controller');
Route::resource('vote', 'vote_controller');
Route::resource('votesession', 'votesession_controller');
Route::resource('adminapproval', 'adminapproval_controller');
Route::resource('adminbanner', 'adminbanner_controller');
Route::get('/remove', 'votesession_controller@delete');
Route::get('/remove_kont', 'votesession_controller@delete_kontestan');
Route::get('/del_post/{id}', 'adminapproval_controller@delete');
Route::post('/add/{day}', 'cha_day1_controller@add_cha');
Route::post('/add_video/{day}', 'cha_video_controller@add_video');
Route::post('/add_youtube/{day}', 'cha_day1_controller@add_cha_youtube');
Route::get('/confirm_post/{day}', 'adminchallenge_controller@edit_post');
Route::get('/confirm_vote/{day}', 'adminchallenge_controller@edit_vote');
Route::get('/reset_confirm/{day}', 'adminchallenge_controller@reset');
Route::get('/sess_kons/{notelp}', 'votesession_controller@sess_kontestan');
Route::get('/form', function () {
  return view('form');
});

Route::get('/test', function () {
  return view('test');
});

Route::get('/heart', function () {
  return view('heart');
});


Route::get('/blank', function () {
  return view('blank');
});

Route::get('/login', function () {
  return view('login');
});

Route::get('/berhasil', function () {
  return view('berhasil');
});

Route::get('/loginadmin', function () {
  return view('loginadmin');
});







