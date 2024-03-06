<div class="container mt-5">
    <p class="h3 mb-2 text-uppercase">{{ $category_name }}</p>
    <hr />
    <div class="row">
        @foreach ($section_two_news as $news)
            <div class="col-md-4 mb-2">
                <div>
                    <a href="{{ url('/read/' . $news->id) }}" class="text-decoration-none text-dark d-block">
                        <img src="{{ asset('storage/media/news/' . $news->image) }}" alt="news-image"
                            class="img-fluid rounded" height="200px" loading="lazy" />
                    </a>
                </div>
                <div>
                    <a href="{{ url('/read/' . $news->id) }}" class="d-block text-dark text-decoration-none mt-1">
                        <p class="h5">{{ $news->title }}</p>
                    </a>
                </div>
                <div>
                    <p>
                        {!! substr($news->news, 0, 800) !!}
                        <a href="{{ url('/read/' . $news->id) }}" class="text-primary text-decoration-none">...Read
                            more</a>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>
