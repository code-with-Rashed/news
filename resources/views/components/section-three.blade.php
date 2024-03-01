<p class="h3 mb-2 text-uppercase">{{ $category_name }}</p>
<hr />
<div class="row">
    @foreach ($section_three_news as $news)
        <div class="col-md-6">
            <a href="read.html" class="d-block">
                <img src="{{ asset('storage/media/news/' . $news->image) }}" alt="news-image" class="img-fluid rounded"
                    loading="lazy" />
            </a>
            <a href="read.html" class="text-decoration-none text-dark d-block">
                <p class="h5 mt-2">{{ $news->title }}</p>
            </a>
            <span class="my-3"><i class="bi bi-calendar3"></i> {{ date('d/m/Y', strtotime($news->crated_at)) }}</span>
            <p>
                {!! substr($news->news, 0, 500) !!}
                <a href="read.html" class="text-primary text-decoration-none">...Read More</a>
            </p>
        </div>
    @endforeach
</div>
