<?php

Route::get('/', function(){
    return "Respon ini diterima dari path / dengan metode GET";
});

Route::get('/books/add', 'BookController@create');

Route::get('/books', 'BookController@index');

Route::post('/books', 'BookController@store');

Route::get('/books/{id}', 'BookConroller@show');

Route::put('/books/{id}', 'BookController@update');

Route::delete('/books/{id}', 'BookController@destroy');

Route::get('/books/edit/{id}', 'BookController@edit');

// Route::get('/books', function(Request $request){
//     return "Respon ini nantinya akan digunakan untuk mengambil semua data buku";
// });

// Route::post('/books', function(){
//     return "Router ini nantinya akan digunakan untuk menciptakan data buku yang baru";
// });

// Route::get('/books/{id}', function($id){
//     return "Respon ini nantinya akan digunakan untuk mengambil satu data buku dengan id=" .$id;
// });

// Route::put('/books/{id}', function($id){
//     return "Router ini nantinya akan digunakan untuk mengubah data buku dengan id=" .$id;
// });
 
// Route::delete('/books/id}', function($id){
//     return "Router ini nantinya digunakan untuk menghapus data buku dengan id=" .$id;
// });

?>