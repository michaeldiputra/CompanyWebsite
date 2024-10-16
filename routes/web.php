<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\LandingPage\LandingPage;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', LandingPage::class);