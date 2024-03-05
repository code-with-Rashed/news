<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\VisitorPanel\Home;
use App\Livewire\VisitorPanel\ReadNews;
use App\Livewire\VisitorPanel\Contact;
use App\Livewire\VisitorPanel\TermsConditions;

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

Route::get('/',Home::class)->name('home-page');
Route::get('/read/{id}',ReadNews::class);
Route::get('/contact-us',Contact::class)->name('contact-page');
Route::get('/terms-conditions',TermsConditions::class)->name('terms-conditions');