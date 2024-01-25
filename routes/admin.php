<?php

use Illuminate\Support\Facades\Route;


use App\Livewire\AdminPanel\Login\Login;
use App\Livewire\AdminPanel\Dashboard;
use App\Livewire\AdminPanel\Category\Categories;
use App\Livewire\AdminPanel\News\NewsList;
use App\Livewire\AdminPanel\Messages\MessageList;
use App\Livewire\AdminPanel\Writers\WriterList;
use App\Livewire\AdminPanel\Settings\Settings;
use App\Livewire\AdminPanel\Profile\Profile;
use App\Livewire\AdminPanel\PrivacyPolicy\PrivacyPolicy;
use App\Livewire\AdminPanel\TermsConditions\TermsConditions;


Route::get("/login", Login::class)->name("login")->middleware("access_admin_login_page");

Route::middleware("access_admin_pages")->group(function () {
    Route::get("dashboard", Dashboard::class)->name("dashboard");
    Route::get("categories", Categories::class)->name("categories");
    Route::get("news-list", NewsList::class)->name("news-list");
    Route::get("message-list", MessageList::class)->name("message-list");
    Route::get("writer-list", WriterList::class)->name("writer-list");
    Route::get("settings", Settings::class)->name("settings");
    Route::get("profile", Profile::class)->name("profile");
    Route::get("privacy-policy", PrivacyPolicy::class)->name("privacy-policy");
    Route::get("terms-conditions", TermsConditions::class)->name("terms-conditions");
});
