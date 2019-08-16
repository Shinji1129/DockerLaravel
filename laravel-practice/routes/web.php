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

Route::get('member/list', 'MemberController@getIndex');

Route::group(['prefix' => 'member'], function() {
  Route::get('list', 'MemberController@getIndex');
  Route::get('new', 'MemberController@new_Index');
  Route::patch('new', 'MemberController@new_confirm');
  Route::post('new', 'MemberController@new_finish');
});

Route::group(['prefix' => 'member'], function() {
  Route::get('edit/{id}/', 'MemberController@edit_index');
  Route::patch('edit/{id}/', 'MemberController@edit_confirm');
  Route::post('edit/{id}/', 'MemberController@edit_finish');
});

Route::group(['prefix' => 'member'], function() {
  Route::post('delete/{id}/', 'MemberController@member_delete');
});

Route::get('list', 'StudentController@getIndex');