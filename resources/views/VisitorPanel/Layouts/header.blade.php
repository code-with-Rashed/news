@php
    $categories = new \App\Livewire\VisitorPanel\Categories();
    $settings = new \App\Livewire\VisitorPanel\Settings();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title ?? '' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link rel="shortcut icon" href="{{ asset('storage/media/favicon/' . $settings->favicon()) }}" type="image/x-icon" />
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4 d-print-none">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home-page') }}">
                <img src="{{ asset('storage/media/logo/' . $settings->logo()) }}" alt="logo" width="120px" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home-page') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            News
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($categories->all_category() as $category)
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ url('/category/' . $category->id) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact-page') }}">Contact</a>
                    </li>
                    @if (session()->has('user'))
                        <li class="nav-item">
                            <a href="{{ route('user.dashboard') }}"
                                class="btn btn-primary btn-sm m-2 px-3">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <button type="button" class="btn btn-primary btn-sm m-2 px-3" data-bs-toggle="modal"
                                data-bs-target="#loginModal">
                                Login
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-primary btn-sm m-2 px-3" data-bs-toggle="modal"
                                data-bs-target="#registerModal">
                                Register
                            </button>
                        </li>
                    @endif
                </ul>
                <form class="d-flex" role="search" method="GET" action="{{ route('search-page', ['s' => '']) }}">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                        name="s" />
                    <button class="btn btn-outline-success" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- navbar end -->
