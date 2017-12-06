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
use App\User;
use App\Program;

Route::get('/', function () {
    $programs = Program::all();
    return view('index')->with('programs', $programs);
});

Route::get('login', 'UsersController@getLogin');
Route::post('login', 'UsersController@postLogin');
Route::get('signup', 'UsersController@getSignup');
Route::post('signup', 'UsersController@postSignup');
Route::get('logout', 'UsersController@logout');
Route::get('{username}/profile', 'UsersController@profile');
Route::post('{username}/profile', 'UsersController@postUpdate');
Route::get('{username}/my_page', 'UsersController@getMyPage');
Route::post('search', 'SearchController@postSearch');
Route::get('programs', 'ProgramsController@index');
Route::get('programs/{id}', 'ProgramsController@show');
Route::get('programs/{program_id}/users/{user_id}/participate', 'MyProgramsController@create');
Route::post('{username}/list_program','UsersController@postListProgram');
Route::get('{username}/list_program','UsersController@postListProgram');
