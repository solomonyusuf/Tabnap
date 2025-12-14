<?php

use App\Livewire\Dashboard;
use App\Livewire\Page1;
use App\Livewire\Page2;
use App\Livewire\Page3;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('home-page');
});

Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/facebook', Page1::class)->name('facebook');
Route::get('/google', Page2::class)->name('google');
Route::get('/instagram', Page3::class)->name('instagram');
