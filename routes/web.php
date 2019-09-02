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
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index');
Route::resource('/departments', 'departmentsController');
Route::resource('/students', 'studentsController');
Route::get('/studentprint', 'studentsController@studentprint');
Route::resource('/courses', 'coursesController');
Route::resource('/employees', 'employeesController');
Route::resource('/exams', 'examsController');
Route::resource('/results', 'resultsController');
Route::get('/results/{id}/create', 'resultsController@create');
Route::get('/results/{id}/grade', 'resultsController@grade');
Route::get('/results/{id}/gba', 'resultsController@gba');
Route::resource('/income', 'incomeController');
Route::resource('/expenses', 'expensesController');
Route::resource('/fees', 'feesController');
Route::get('/fees/{id}/create', 'feesController@create2');
Route::get('/', 'HomeController@index');
Route::get('/fees/{id}/payment', 'feesController@payment');
Route::resource('/books', 'booksController');
Route::resource('/barowbooks', 'browBooksController');
Route::resource('/attendence', 'attendencesController');
Route::resource('/leave', 'leavesController');
Route::get('autocomplete', 'feesController@autocomplete')->name('autocomplete');
// Route::get('/search', 'feesController@autocomplete');
Route::resource('/users', 'usersController');
