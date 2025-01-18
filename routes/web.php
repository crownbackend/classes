<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\HomePage::class)->name('home');
Route::get('/register', \App\Livewire\Register::class)->name('register');
