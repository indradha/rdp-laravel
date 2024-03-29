<?php

/*
|--------------------------------------------------------------------------
| Core Routes
|--------------------------------------------------------------------------
|
| Core Module v1.0
| developed by Indra Dhanurendra (indra.dhanurendra@gmail.com)
|
*/

// Set Dashboard Routing
Route::get('dashboard', function(){
	return View::make('Core::dashboard');
})->before('auth');	

Route::get('empty', function(){
	return 'Under Development';
})->before('auth');	


Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController');


// Random test:
// foreach (Config::get('core::channels') as $key => $channel)
// {
//     Route::get('admin/core/' . $key, function() use ($channel) {
//         return "<h1>Channel [{$channel['title']}]</h1>";
//     });
// }
 
