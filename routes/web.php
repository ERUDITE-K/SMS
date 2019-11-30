<?php
use App\rank;
use App\institution;
use App\employee;

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
	$ranks=rank::all();
	$institutions=institution::all();
	$employee=employee::all();
    return view('homepage',compact('ranks','institutions','employee'));
});

Route::get('home', 'employeesController@home')->name('home');

Route::post('registe', 'employeesController@register')->name('registe');

Route::put('up/{id}', 'employeesController@update')->name('up');

Route::get('profile', 'employeesController@profile')->name('profile');

Route::get('edit/{id}', 'employeesController@editform')->name('edit');

Route::get('del/{id}', 'employeesController@del')->name('del');

Route::get('reg','employeesController@reg')->name('reg');


           /*Admin*/
Route::get('admin','adminsController@admin')->name('admin');  

Route::get('admin_home', 'adminsController@index')->name('admin_home');

Route::get('admin_profile','adminsController@admin_profile')->name('admin_profile');

Route::get('admin_index','adminsController@admin_index')->name('admin_index');

Route::get('employee_profile/{id}','adminsController@employee_profile')->name('employee_profile');

Route::get('registration_form', 'adminsController@form')->name('registration_form');




            /*ranks*/

Route::get('rank_index', 'ranksController@rindex')->name('rank_index');

Route::post('rank', 'ranksController@create')->name('rank');

Route::get('add_rank', 'ranksController@form')->name('add_rank');

Route::post('rank/delete/{id}', 'ranksController@destroy')->name('destroy');

Route::get('updateform/{id}', 'ranksController@updateform')->name('upform');

Route::get('ranks/index', 'ranksController@index')->name('show');

Route::post('rank/update/{id}', 'ranksController@update')->name('upd');

Route::get('new/{id}', 'ranksController@new')->name('new');

Route::get('nav', 'ranksController@new')->name('naw');



/*institutions*/

Route::post('update/{id}', 'institutionsController@update')->name('update');

Route::post('create', 'institutionsController@create')->name('create');

Route::get('institution_index', 'institutionsController@index')->name('index');

Route::get('index2/{id}', 'institutionsController@index2')->name('index2');

Route::get('add_institution', 'institutionsController@form')->name('add_institution');

Route::get('editform/{id}', 'institutionsController@updateform')->name('updateform');

Route::post('delete/{id}', 'institutionsController@destroy')->name('delete');







Auth::routes();

