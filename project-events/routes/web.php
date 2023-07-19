<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $nome = "Diego";
    $idade = "13";
    $arr = [1,2,3,4,5,6];


    return view('welcome',
    ['nome' => $nome ,
     'idade' => $idade,
     'arr' => $arr]
    );
});

Route::get('/contacts', function () {

    $busca = request('search');

    return view('contacts', ['busca' => $busca]);
});

Route::get('/produtos/{id}', function ($id) {
    return view('produtos', ['id' => $id]);
});


Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});
