<div>
    <!-- Content area start -->
    <div class="container my-5">
        @foreach ($category_news as $news)
            <div class="row shadow rounded py-3 px-2 mb-3 m-auto">
                <!-- Category area start -->
                <div class="col">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{ url('/read/' . $news->id) }}" class="d-block">
                                <img src="{{ asset('storage/media/news/' . $news->image) }}" alt="lates-newa-image"
                                    class="img-fluid rounded" loading="lazy" />
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="my-1">
                                <a href="{{ url('/read/' . $news->id) }}" class="text-decoration-none text-dark">
                                    <p class="h6">
                                        {{ $news->title }}
                                    </p>
                                </a>
                            </div>
                            <div class="mb-3">
                                <a href="{{ url('/category/' . $news->category_id) }}"
                                    class="text-decoration-none text-dark">
                                    <span title="Category"><i class="bi bi-tag"></i>{{ $news->category->name }}</span>
                                </a>
                                <span class="ms-2"><i class="bi bi-calendar3"></i>
                                    {{ date('d/m/Y', strtotime($news->created_at)) }}</span>
                            </div>
                            <div>
                                {!! substr($news->news, 0, 800) !!}
                                <a href="{{ url('/read/' . $news->id) }}"
                                    class="text-primary text-decoration-none">...Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Category area end -->
            </div>
        @endforeach
        {{-- pagination start --}}
        {{ $category_news->links('pagination::bootstrap-5') }}
        {{-- pagination end --}}
    </div>
    <!-- Content area end -->
</div>
