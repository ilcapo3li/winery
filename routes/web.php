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

// $feed=Feed::make('https://www.winespectator.com/rss/rss?t=dwp');
//  return response()->json($feed);

// $tables=DB::select('SHOW TABLES');
// dd($tables[0]->Tables_in_marstestdb);
// use Illuminate\Support\Facades\DB;
// use ArandiLopez\Feed\Facades\Feed;


Route::get('/', function () {

    return view('welcome');
});


Auth::routes();
    Route::group(['middleware' => ['auth']], function () {

        Route::get('/home', 'HomeController@index')->name('home');
        Route::resource('/wine','WineController');



    });