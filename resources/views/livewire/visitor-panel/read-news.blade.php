<div>

    <!-- main content area start -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-7">
                <h1 class="h5 mb-3">
                    {{ $read_news->title }}
                </h1>
                <div class="mb-2">
                    <img src="{{ asset('storage/media/news/' . $read_news->image) }}" alt="read-news-image"
                        class="rounded w-100" height="400px" loading="lazy" />
                </div>
                <!-- action area start -->
                <div class="row d-print-none">
                    <div class="col-md-6 mb-3 mt-2">
                        <div class="d-flex justify-content-evenly">
                            <div>
                                <button type="button" class="btn btn-sm btn-primary" title="Likes">
                                    <i class="bi bi-hand-thumbs-up"></i>
                                    {{ $news_summaries[0]->total_likes }}
                                </button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-sm btn-secondary mx-1" title="Dislikes">
                                    <i class="bi bi-hand-thumbs-down"></i>
                                    {{ $news_summaries[0]->total_dislikes }}
                                </button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-sm btn-primary" title="Comments">
                                    <i class="bi bi-chat"></i>
                                    {{ $news_summaries[0]->total_comments }}
                                </button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-sm btn-primary" title="Views">
                                    <i class="bi bi-graph-up-arrow"></i>
                                    {{ $news_summaries[0]->total_views }}
                                </button>
                            </div>
                            <div>
                                <button onclick="window.print()" type="button" class="btn btn-sm btn-primary"
                                    title="print">
                                    <i class="bi bi-printer"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-end mb-3 mt-2">
                        <span title="Category" class="me-2"><i
                                class="bi bi-tag"></i>{{ $read_news->category->name }}</span>
                        <span title="Release Date"><i class="bi bi-calendar3"></i>
                            {{ date('d/m/Y', strtotime($read_news->created_at)) }}</span>
                    </div>
                </div>
                <!-- action area end -->
                <!-- news area start -->
                <div>
                    {!! $read_news->news !!}
                </div>
                <!-- news area end -->
                <hr />
                <!-- comments area start-->
                <div class="mb-4 accordion shadow-sm d-print-none" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <strong><i class="bi bi-chat me-1 text-primary"></i>Comments</strong>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="p-1 shadow-sm mb-1">
                                    <div>
                                        <strong>Rashed alam</strong>
                                        <br />
                                        <span>10/09/2022</span>
                                        <br />
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit.
                                        </p>
                                    </div>
                                </div>
                                <div class="p-1 shadow-sm mb-1">
                                    <div>
                                        <strong>Arafat islam</strong>
                                        <br />
                                        <span>10/11/2023</span>
                                        <br />
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit.
                                        </p>
                                    </div>
                                </div>
                                <div class="p-1 shadow-sm mb-1">
                                    <div>
                                        <strong>Affan sekh</strong>
                                        <br />
                                        <span>30/09/2021</span>
                                        <br />
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit.
                                        </p>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-sm btn-primary mt-2" title="More Comments...">
                                    More...
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- comments area end-->
            </div>
            <!-- Related news area start -->
            <div class="col-md-5 d-print-none">
                <p class="h3 mb-2">RELATED NEWS</p>
                <hr />
                <div class="shadow-sm p-2">
                    @foreach ($related_news as $news)
                        <div class="row mb-2">
                            <div class="col-md-4">
                                <a href="{{ url('/read/' . $news->id) }}" class="d-block">
                                    <img src="{{ asset('storage/media/news/' . $news->image) }}" alt="lates-newa-image"
                                        class="img-fluid rounded" loading="lazy" />
                                </a>
                            </div>
                            <div class="col-md-8">
                                <a href="{{ url('/read/' . $news->id) }}" class="text-decoration-none text-dark">
                                    <p class="h6">
                                        {{ $news->title }}
                                    </p>
                                </a>
                                <a href="{{ url('/category/' . $news->category_id) }}"
                                    class="text-decoration-none text-dark">
                                    <span title="Category"><i
                                            class="bi bi-tag"></i>{{ $read_news->category->name }}</span>
                                </a>
                                <span class="d-block mt-1"><i class="bi bi-calendar3"></i>
                                    {{ date('d/m/Y', strtotime($news->created_at)) }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Releted news area end -->
        </div>
    </div>
    <!-- main content area end -->

</div>
