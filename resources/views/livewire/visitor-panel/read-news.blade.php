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
                                <button type="button" class="btn btn-sm btn-primary" title="Likes"
                                    wire:click="like({{ $read_news->id }})">
                                    <i class="bi bi-hand-thumbs-up"></i>
                                    {{ $news_summaries->total_likes ?? 0 }}
                                </button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-sm btn-secondary mx-1" title="Dislikes"
                                    wire:click="dislike({{ $read_news->id }})">
                                    <i class="bi bi-hand-thumbs-down"></i>
                                    {{ $news_summaries->total_dislikes ?? 0 }}
                                </button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-sm btn-primary" title="Comments">
                                    <i class="bi bi-chat"></i>
                                    {{ $news_summaries->total_comments ?? 0 }}
                                </button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-sm btn-primary" title="Views">
                                    <i class="bi bi-graph-up-arrow"></i>
                                    {{ $news_summaries->total_views ?? 1 }}
                                </button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-sm btn-primary" title="Bookmark"
                                    wire:click="bookmark({{ $read_news->id }})">
                                    <i class="bi bi-bookmark"></i>
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
                <!-- write comments area start-->
                <div class="p-4 shadow-sm my-2 d-print-none">
                    <form wire:submit="save_comment({{ $read_news->id }})">
                        <div class="mb-3">
                            <textarea wire:model="comment" class="form-control" id="comment" cols="30" rows="4"
                                placeholder="Write Your Comment" maxlength="255"></textarea>
                            @error('comment')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <hr />
                </div>
                <!-- write comments area start-->
                <!-- comments area start-->
                <div wire:ignore.self class="mb-4 accordion shadow-sm d-print-none" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <strong wire:click="show_comments({{ $read_news->id }})"><i
                                        class="bi bi-chat me-1 text-primary"></i>Show Comments</strong>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @if (count($comments) > 0)
                                    @foreach ($comments as $comment)
                                        <div class="p-2 shadow-sm mb-1 rounded">
                                            <div>
                                                <div class="d-flex justify-content-between">
                                                    <strong>{{ $comment->user->name }}</strong>
                                                    @if(session()->has('user'))
                                                       @if (session('user')['id'] == $comment->user_id)
                                                           <span
                                                               wire:click="delete_comment({{ $comment->news_id }},{{ $comment->id }})"
                                                               role="button" class="badge text-bg-danger"
                                                               title="Delete Your Comment."><i
                                                                   class="bi bi-trash3"></i></span>
                                                       @endif
                                                    @endif
                                                </div>
                                                <span>{{ date('d/m/Y', strtotime($comment->created_at)) }}</span>
                                                <br />
                                                <p>{{ $comment->comment }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                    <button type="button" class="btn btn-sm btn-primary mt-2" title="More Comments...">
                                        More...
                                    </button>
                                @else
                                    <div class="p-2 shadow-sm mb-1">
                                        <div>
                                            <strong>Comment not found !!</strong>
                                        </div>
                                    </div>
                                @endif
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
