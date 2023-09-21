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
    $nael = 2;
    return view('home');
});

Route::get('/ajouterEmploye', function(){
    return view('vues/formEmploye');
});

Route::post('/postEmploye', [EmployeControleur::class, 'postAjouterEmploye']);
