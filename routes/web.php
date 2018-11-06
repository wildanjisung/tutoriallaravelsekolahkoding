<?php

Route::get('/', function () {
    return view('welcome');
});

// tes route
/* Route::get('/koding', function () {
    return 'hello';
}); */

// Route::get('/koding', function () {
//     return view('blog/home');
// });

Route::get('/blog', 'BlogController@index');
Route::get('/blog/{id}', 'BlogController@show');
