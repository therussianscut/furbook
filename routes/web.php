<?php


use App\Cat;

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
    return redirect('cats');
});


Route::get('cats/{id}', function ($id) {

    return sprintf('Cat #%s', $id);

})->where('id', '[0-9]+');

Route::get('index', function () {


    $cats= \Furbook\Breed::all();

    return view('index')->with('cats', $cats);

});

Route::get('about', function () {


    return view('about')->with('number_of_cats', 9000);

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
