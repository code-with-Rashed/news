@php
    $settings = new \App\Livewire\VisitorPanel\Settings();
@endphp
<!-- Sidebar Area Start -->
<div class="col-2 bg-white shadow-sm vh-100">
    <!-- Logo Area Start -->
    <div class="py-3 text-center">
        <img src="{{ asset('storage/media/logo/' . $settings->logo()) }}" alt="logo" width="150" />
    </div>
    <!-- Logo Area End -->
    <!-- Sidebar Link Area Start -->
    <div class="row">
        <div class="col mt-5">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="text-decoration-none fs-6 text-dark fw-bold text-capitalize d-block">
                        <i class="bi bi-diagram-3 fs-5 me-1"></i>
                        Dashboard
                    </a>
                </li>
                @if (session()->get('admin')['role'] == 'admin')
                    <li class="list-group-item">
                        <a href="{{ route('admin.categories') }}"
                            class="text-decoration-none fs-6 text-dark fw-bold text-capitalize d-block">
                            <i class="bi bi-list-ul fs-5 me-1"></i>
                            Categories
                        </a>
                    </li>
                @endif
                <li class="list-group-item">
                    <a href="{{ route('admin.news-list') }}"
                        class="text-decoration-none fs-6 text-dark fw-bold text-capitalize d-block">
                        <i class="bi bi-newspaper fs-5 me-1"></i>
                        News
                    </a>
                </li>
                @if (session()->get('admin')['role'] == 'admin' || session()->get('admin')['role'] == 'moderator')
                <li class="list-group-item">
                    <a href="{{ route('admin.message-list') }}"
                        class="text-decoration-none fs-6 text-dark fw-bold text-capitalize d-block">
                        <i class="bi bi-envelope-open fs-5 me-1"></i>
                        Messages
                    </a>
                </li>
                @endif
                @if (session()->get('admin')['role'] == 'admin')
                <li class="list-group-item">
                    <a href="{{ route('admin.writer-list') }}"
                        class="text-decoration-none fs-6 text-dark fw-bold text-capitalize d-block">
                        <i class="bi bi-keyboard fs-5 me-1"></i>
                        Writer's
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('admin.settings') }}"
                        class="text-decoration-none fs-6 text-dark fw-bold text-capitalize d-block">
                        <i class="bi bi-gear fs-5 me-1"></i>
                        Settings
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('admin.address') }}"
                        class="text-decoration-none fs-6 text-dark fw-bold text-capitalize d-block">
                        <i class="bi bi-geo-alt fs-5 me-1"></i>
                        Address
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('admin.privacy-policy') }}"
                        class="text-decoration-none fs-6 text-dark fw-bold text-capitalize d-block">
                        <i class="bi bi-shield-check fs-5 me-1"></i>
                        Privacy Policy
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('admin.terms-conditions') }}"
                        class="text-decoration-none fs-6 text-dark fw-bold text-capitalize d-block">
                        <i class="bi bi-pin fs-5 me-1"></i>
                        Terms &amp; Conditions
                    </a>
                </li>
                @endif
            </ul>
        </div>
    </div>
    <!-- Sidebar Link Area End -->
</div>
<!-- Sidebar Area End -->
