@php
    $settings = new \App\Livewire\VisitorPanel\Settings();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'User Panel' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/user_panel.css') }}">
    <link rel="shortcut icon" href="{{ asset('storage/media/favicon/' . $settings->favicon()) }}" type="image/x-icon">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button" onclick="toggle()">
                    <i class="bi bi-ui-radios-grid"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="{{ route('home-page') }}">
                        <img src="{{ asset('storage/media/logo/' . $settings->logo()) }}" alt="logo" width="100">
                    </a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item mb-2">
                    <a href="{{ route('home-page') }}" class="sidebar-link">
                        <i class="bi bi-house-heart fs-5 me-1"></i>
                        <span>Back Home Page</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('user.dashboard') }}" class="sidebar-link">
                        <i class="bi bi-diagram-3 fs-5 me-1"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('user.news-feed') }}" class="sidebar-link">
                        <i class="bi bi-newspaper"></i>
                        <span>News Feed</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('user.bookmarked-news') }}" class="sidebar-link">
                        <i class="bi bi-bookmarks"></i>
                        <span>Bookmark news</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('user.liked-news') }}" class="sidebar-link">
                        <i class="bi bi-hand-thumbs-up"></i>
                        <span>Liked news</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('user.disliked-news') }}" class="sidebar-link">
                        <i class="bi bi-hand-thumbs-down"></i>
                        <span>Disliked news</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('user.interested-category') }}" class="sidebar-link">
                        <i class="bi bi-bookmark-heart"></i>
                        <span>Interested on category</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="{{ route('user.profile') }}" class="sidebar-link">
                    <img src="{{ asset('storage/media/profile/' . session()->get('user')['photo']) }}" alt="profile"
                        width="25px" height="25px" style="border-radius: 50%;">
                    <span class="ms-1 text-capitalize">{{ session()->get('user')['name'] }}</span>
                </a>
                <a href="{{ route('user.logout') }}" class="sidebar-link">
                    <i class="bi bi-box-arrow-left"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
