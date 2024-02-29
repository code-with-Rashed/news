@php
    $categories = new \App\Livewire\VisitorPanel\Categories();
@endphp
<!-- footer area start -->
<footer class="bg-dark p-5 text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p>CATEGORYES</p>
                <hr />
                <ul class="list-unstyled">
                    @foreach ($categories->all_category() as $category)
                        <a href="category.html" class="text-decoration-none text-white">
                            <li class="mb-1">{{ $category->name }}</li>
                        </a>
                    @endforeach

                </ul>
            </div>
            <div class="col-md-4">
                <p>PAGES</p>
                <hr />
                <ul class="list-unstyled">
                    <a href="{{ route('contact-page') }}" class="text-decoration-none text-white">
                        <li class="mb-1">Contact Us</li>
                    </a>
                    <a href="#" class="text-decoration-none text-white">
                        <li class="mb-1">About Us</li>
                    </a>
                    <a href="#" class="text-decoration-none text-white">
                        <li class="mb-1">Terms of Use</li>
                    </a>
                    <a href="#" class="text-decoration-none text-white">
                        <li class="mb-1">Privacy Policy</li>
                    </a>
                </ul>
            </div>
            <div class="col-md-4">
                <p>ADDRESS</p>
                <hr />
                <ul class="list-unstyled">
                    <li class="mb-1">
                        <i class="bi bi-house"></i> XYZ Road , ABC Building New Yourk ,
                        USA
                    </li>
                    <a href="tel:+880 01921042138" class="text-decoration-none text-white">
                        <li class="mb-1">
                            <i class="bi bi-phone"></i> +880 01921042138
                        </li>
                    </a>
                    <a href="mailto:contact@gmail.com" class="text-decoration-none text-white">
                        <li class="mb-1">
                            <i class="bi bi-envelope"></i> contact@gmail.com
                        </li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
    <a href="#" class="text-decoration-none text-white d-block text-center">&copy; Rashed</a>
</footer>
<!-- footer area end -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
@stack('sweet_alert')
</body>

</html>
