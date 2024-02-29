<!-- Latest news area start -->
<div class="col-md-5">
    <p class="h3 mb-2">LATEST NEWS</p>
    <hr />
    <div class="shadow-sm p-2">
        @foreach ($latest_news as $news)
            <div class="row mb-3">
                <div class="col-md-4">
                    <a href="read.html" class="d-block">
                        <img src="{{ asset('storage/media/news/' . $news->image) }}" alt="lates-newa-image"
                            class="img-fluid rounded" loading="lazy" />
                    </a>
                </div>
                <div class="col-md-8">
                    <a href="read.html" class="text-decoration-none text-dark">
                        <p class="h6">
                            {{ $news->title }}
                        </p>
                    </a>
                    <a href="category.html" class="text-decoration-none text-dark">
                        <span title="Category"><i class="bi bi-tag"></i>{{ $news->category->name }}</span>
                    </a>
                    <span class="d-block mt-1"><i
                            class="bi bi-calendar3 me-2"></i>{{ date('d/m/Y', strtotime($news->created_at)) }}</span>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- Latest news area end -->
