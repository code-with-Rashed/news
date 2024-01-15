<?php

use Illuminate\Support\Facades\Route;

// Admin Panel Class List Start
use App\Livewire\AdminPanel\Dashboard;
use App\Livewire\AdminPanel\Category\Categories;
use App\Livewire\AdminPanel\News\NewsList;
use App\Livewire\AdminPanel\Messages\MessageList;
use App\Livewire\AdminPanel\Writers\WriterList;
use App\Livewire\AdminPanel\Settings\Settings;
use App\Livewire\AdminPanel\Profile\Profile;
use App\Livewire\AdminPanel\PrivacyPolicy\PrivacyPolicy;
use App\Livewire\AdminPanel\TermsConditions\TermsConditions;

// Admin Panel Class List End

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

// Admin Panel Routes Start
Route::get("admin/dashboard", Dashboard::class)->name("admin.dashboard");
Route::get("admin/categories", Categories::class)->name("admin.categories");
Route::get("admin/news-list", NewsList::class)->name("admin.news-list");
Route::get("admin/message-list", MessageList::class)->name("admin.message-list");
Route::get("admin/writer-list", WriterList::class)->name("admin.writer-list");
Route::get("admin/settings", Settings::class)->name("admin.settings");
Route::get("admin/profile", Profile::class)->name("admin.profile");
Route::get("admin/privacy-policy", PrivacyPolicy::class)->name("admin.privacy-policy");
Route::get("admin/terms-conditions", TermsConditions::class)->name("admin.terms-conditions");
// Admin Panel Routes End
