<div class="row mt-4">
    <p class="h3 mb-2 text-uppercase">{{ $category_name }}</p>
    <hr />
    <div class="col-md-6">
        <a href="read.html" class="d-block">
            <img src="{{ asset('storage/media/news/' . $section_four_first_news->image) }}" alt="news-image"
                class="img-fluid rounded" loading="lazy" />
        </a>
        <a href="read.html" class="text-decoration-none text-dark my-2 d-block">
            <p class="h5">
                {{ $section_four_first_news->title }}
            </p>
        </a>
        <span><i class="bi bi-calendar3"></i>
            {{ date('d/m-Y', strtotime($section_four_first_news->created_at)) }}</span>
        <p class="mt-1">
            {!! substr($section_four_first_news->news, 0, 300) !!}
            <a href="read.html" class="text-decoration-none text-primary">...Read More</a>
        </p>
    </div>
    <div class="col-md-6">
        <div class="row">
            @foreach ($section_four_news as $news)
                <div class="col-md-6 mb-2">
                    <a href="read.html" class="text-decoration-none text-dark d-block">
                        <img src="{{ asset('storage/media/news/' . $news->image) }}" alt="news-image"
                            class="img-fluid rounded" loading="lazy" />
                    </a>
                    <a href="read.html" class="text-decoration-none text-dark d-block">
                        <p class="fw-bold mb-1">{{ $news->title }}</p>
                    </a>
                    <span><i class="bi bi-calendar3"></i> {{ date('d/m-Y', strtotime($news->created_at)) }}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>
