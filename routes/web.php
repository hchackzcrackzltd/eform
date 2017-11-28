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
Route::group(['prefix'=>'/','middleware'=>'auth'],function(){
  Route::get('/','User\index_eform@index')->middleware('check_edit')->name('index');
  Route::post('preview','User\index_eform@preview')->name('preview');
  Route::resource('eform','User\eform');
  Route::get('{fnm}/viewfile','User\eform@downloaddoc')->name('viewfile');
});

Route::get('/manage','Auth\LoginAdmin@index')->name('login_admin');
Route::post('/manage/login','Auth\LoginAdmin@login')->name('login_act_admin');
Route::post('/manage/logout','Auth\LoginAdmin@logout')->name('logout_act_admin');

Route::group(['prefix'=>'manage','middleware'=>'auth:admin'],function(){
  Route::get('candidate','Admin\Candidate\candidateControll@index')->name('candidate_admin');
  Route::get('candidate/add','Admin\Candidate\candidateControll@create')->name('candidate_add_admin');
  Route::post('candidate/add','Admin\Candidate\candidateControll@store')->name('candidate_store_admin');
  Route::delete('candidate/{usr}/delete','Admin\Candidate\candidateControll@destroy')->name('candidate_delete_admin');
  Route::patch('candidate/{usr}/update','Admin\Candidate\candidateControll@update')->name('candidate_update_admin');
  Route::get('candidate/{usr}/edit','Admin\Candidate\candidateControll@edit')->name('candidate_edit_admin');
  Route::patch('candidate/{usr}/edit','Admin\Candidate\candidateControll@update_edit')->name('candidate_update_edit_admin');
  Route::resource('member','Admin\Member\member');
  Route::resource('email','Admin\Email\emailnoti');
  Route::get('candidate/{id}/show','Admin\Candidate\candidateControll@show')->name('candidate_sh_admin');
  Route::get('candidate/{fnm}/viewfile','Admin\Candidate\candidateControll@downloaddoc')->name('candidate_viewfile');
  Route::get('export','Admin\Export\export@index')->name('candidate_export');
  Route::post('export','Admin\Export\export@store')->name('candidate_exportout');
  Route::resource('masterdata/position','Admin\Masterdata\position');
  Route::resource('masterdata/education','Admin\Masterdata\education');
  Route::resource('masterdata/lang','Admin\Masterdata\lang');
  Route::resource('masterdata/relig','Admin\Masterdata\relig');
  Route::resource('masterdata/race','Admin\Masterdata\race');
  Route::resource('masterdata/provin','Admin\Masterdata\provin');
  Route::resource('masterdata/nation','Admin\Masterdata\nation');
});

Auth::routes();
