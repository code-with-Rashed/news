<section>
    <div class="container mt-5">
        <div class="row">
            <p class="h3 mb-2 text-uppercase">{{ $category->name }}</p>
            <hr />
            @if ($first_news)
                <div class="col-md-4">
                    <a href="{{ url('/read/' . $first_news->id) }}" class="d-block">
                        <img src="{{ asset('storage/media/news/' . $first_news->image) }}" alt="news-image"
                            class="rounded img-fluid" loading="lazy" />
                    </a>
                    <a href="{{ url('/read/' . $first_news->id) }}" class="text-decoration-none d-block text-dark">
                        <p class="h5 mt-2">
                            {{ $first_news->title }}
                        </p>
                    </a>
                    <span title="Release Date" class="d-block my-2"><i class="bi bi-calendar3"></i>
                        {{ date('d/m/Y', strtotime($first_news->created_at)) }}</span>
                    <p>
                        {!! substr($first_news->news, 0, 800) !!}
                        <a href="{{ url('/read/' . $first_news->id) }}"
                            class="text-primary text-decoration-none">...Read
                            more</a>
                    </p>
                </div>
            @endif
            <div class="col-md-8">
                <div class="row">
                    @foreach ($section_one_news as $news)
                        <div class="col-md-4 mb-3">
                            <a href="{{ url('/read/' . $news->id) }}" class="d-block">
                                <img src="{{ asset('storage/media/news/' . $news->image) }}" alt="news-image"
                                    class="img-fluid rounded" loading="lazy" />
                            </a>
                            <a href="{{ url('/read/' . $news->id) }}"
                                class="text-decoration-none text-dark mt-1 d-block">
                                <p>{{ $news->title }}</p>
                            </a>
                            <span title="Release Date" class="fs-6"><i class="bi bi-calendar3"></i>
                                {{ date('d/m/Y', strtotime($news->created_at)) }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
