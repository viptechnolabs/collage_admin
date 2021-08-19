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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [\App\Http\Controllers\IndexConroller::class, 'index'])->name('index');

Route::get('add_school', [\App\Http\Controllers\IndexConroller::class, 'addSchool'])->name('add_school');
Route::post('submit_school', [\App\Http\Controllers\IndexConroller::class, 'SubmitSchool'])->name('submit_school');
Route::get('school', [\App\Http\Controllers\IndexConroller::class, 'School'])->name('school');

Route::get('add_college', [\App\Http\Controllers\IndexConroller::class, 'addCollege'])->name('add_college');
Route::post('submit_college', [\App\Http\Controllers\IndexConroller::class, 'SubmitCollege'])->name('submit_college');
Route::get('college', [\App\Http\Controllers\IndexConroller::class, 'College'])->name('college');



Route::get('add_university', [\App\Http\Controllers\IndexConroller::class, 'addUniversity'])->name('add_university');
Route::post('submit_university', [\App\Http\Controllers\IndexConroller::class, 'SubmitUniversity'])->name('submit_university');
Route::get('university', [\App\Http\Controllers\IndexConroller::class, 'University'])->name('university');

