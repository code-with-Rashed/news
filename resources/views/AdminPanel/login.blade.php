@php
    $settings = new \App\Livewire\VisitorPanel\Settings();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN LOGIN PAGE</title>
    <link rel="shortcut icon" href="{{ asset('storage/media/favicon/' . $settings->favicon()) }}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="bg-light">
    <div class="w-50 m-auto shadow-sm p-4 bg-white mt-5 rounded">
        <img src="{{ asset('storage/media/logo/' . $settings->logo()) }}" alt="logo"
            class="d-block m-auto mb-3 w-25" />
        <p class="h5 text-center mb-4">Login Your Account</p>
        <!-- Login Form Start -->
        {{ $slot }}
        <!-- Login Form End -->
    </div>
    {{-- Sweet Alert Script Start --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/js/sweetAlert.js') }}"></script>
    {{-- Sweet Alert Script End --}}
</body>

</html>
