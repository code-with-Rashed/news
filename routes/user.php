<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\UsersPanel\Dashboard;
use App\Livewire\UsersPanel\NewsFeed;
use App\Livewire\UsersPanel\BookmarkedNews;
use App\Livewire\UsersPanel\DislikedNews;
use App\Livewire\UsersPanel\LikedNews;
use App\Livewire\UsersPanel\InterestedCategory;
use App\Livewire\UsersPanel\Profile;

Route::middleware("access_user_pages")->group(function () {
    Route::get("dashboard", Dashboard::class)->name("dashboard");
    Route::get("news/feed", NewsFeed::class)->name("news-feed");
    Route::get("bookmarked/news", BookmarkedNews::class)->name("bookmarked-news");
    Route::get("liked/news", LikedNews::class)->name("liked-news");
    Route::get("disliked/news", DislikedNews::class)->name("disliked-news");
    Route::get("interested/category", InterestedCategory::class)->name("interested-category");
    Route::get("profile", Profile::class)->name("profile");
    Route::get("logout", function () {
        session()->forget("user");
        return redirect()->route("home-page");
    })->name("logout");
});
