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
    return redirect('/login');
});
Route::get('/home', 'App\Http\Controllers\Vacancy\LandingController@getLanding')->middleware('web')->name('display');
Route::get('/home/contact', 'App\Http\Controllers\Vacancy\LandingController@contact')->name('contact');
Route::get('/home/career', 'App\Http\Controllers\Vacancy\LandingController@career')->name('career');
Route::get('/home/project', 'App\Http\Controllers\Vacancy\LandingController@project')->name('project');
Route::get('/home/visi-misi', 'App\Http\Controllers\Vacancy\LandingController@visi')->name('visi-misi');
Route::get('/home/apply/{id}', 'App\Http\Controllers\Vacancy\LandingController@apply')->name('apply');
Route::post('/home', 'App\Http\Controllers\Vacancy\LandingController@postApply')->name('add-apply');

Route::get('/admin-page', 'App\Http\Controllers\Vacancy\AdminController@index')->middleware('auth')->name('dashboard');
Route::get('/admin/lowongan', 'App\Http\Controllers\Vacancy\AdminController@lowongan')->middleware('auth')->name('lowongan');
Route::get('/admin/lowongan/form', 'App\Http\Controllers\Vacancy\AdminController@createLowongan')->middleware('auth')->name('create-lowongan');
Route::post('/admin/lowongan/form', 'App\Http\Controllers\Vacancy\AdminController@postLowongan')->name('add-lowongan');
Route::get('/admin/lowongan/{id}/update/{status}', 'App\Http\Controllers\Vacancy\AdminController@updateStatus')->middleware('auth')->name('status');
Route::get('/admin/lowongan/{id}/edit', 'App\Http\Controllers\Vacancy\AdminController@editLowongan')->middleware('auth')->name('edit-lowongan');
Route::post('/admin/lowongan/{id}/update', 'App\Http\Controllers\Vacancy\AdminController@updateLowongan')->middleware('auth')->name('update-lowongan');
Route::get('/admin/lowongan/{id}/delete', 'App\Http\Controllers\Vacancy\AdminController@deleteLowongan')->middleware('auth')->name('delete-lowongan');
Route::get('/admin/koko', 'App\Http\Controllers\Vacancy\AdminController@koko')->middleware('auth')->name('koko');

Route::get('/admin/report', 'App\Http\Controllers\Vacancy\AdminController@report')->middleware('auth')->name('report');
Route::get('/admin/reportxls', 'App\Http\Controllers\Vacancy\AdminController@reportxls')->middleware('auth')->name('report-xls');
Route::get('/admin/export_excel', 'App\Http\Controllers\Vacancy\AdminController@export_excel')->middleware('auth')->name('export-xls');

Auth::routes();

Route::get('/homesku', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
