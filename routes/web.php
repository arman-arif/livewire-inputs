<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('items')->group(function () {
    Route::get('new', \App\Http\Livewire\Form1::class);
});
