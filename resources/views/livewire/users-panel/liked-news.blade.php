<div>
    @foreach ($liked_news as $liked)
        <div class="row shadow rounded py-3 px-2 mb-3 m-auto" wire:key="{{ $liked->id }}">
            <!-- Category area start -->
            <div class="col">
                <div class="row">
                    <div class="col-md-3">
                        <div class="d-md-none d-sm-block mb-2 text-end">
                            <span class="badge text-bg-danger" title="Remove from liked news."
                                wire:click="remove_liked_news({{ $liked->id }})"><i class="bi bi-trash3"></i></span>
                        </div>
                        <a href="{{ url('/read/' . $liked->news->id) }}" class="d-block">
                            <img src="{{ asset('storage/media/news/' . $liked->news->image) }}" alt="lates-newa-image"
                                class="img-fluid rounded" loading="lazy" />
                        </a>
                    </div>
                    <div class="col-md-9">
                        <div class="my-1 d-flex justify-content-between">
                            <a href="{{ url('/read/' . $liked->news->id) }}" class="text-decoration-none text-dark">
                                <p class="h6">
                                    {{ $liked->news->title }}
                                </p>
                            </a>
                            <button class="btn btn-sm btn-danger d-md-block d-none" title="Remove from liked news."
                                wire:click="remove_liked_news({{ $liked->id }})"><i
                                    class="bi bi-trash3"></i></button>
                        </div>
                        <div class="mb-3">
                            <a href="{{ url('/category/' . $liked->news->category_id) }}"
                                class="text-decoration-none text-dark">
                                <span title="Category">
                                    <i class="bi bi-tag"></i>
                                    @foreach ($category as $value)
                                        @if ($value->id == $liked->news->category_id)
                                            {{ $value->name }}
                                        @endif
                                    @endforeach
                                </span>
                            </a>
                            <span class="ms-2"><i class="bi bi-calendar3"></i>
                                {{ date('d/m/Y', strtotime($liked->news->created_at)) }}</span>
                        </div>
                        <div>
                            <article>
                                <p class="mt-1">
                                    {!! substr($liked->news->news, 0, 800) !!}
                                    <a href="{{ url('/read/' . $liked->news->id) }}"
                                        class="text-decoration-none text-primary">...Read More</a>
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Category area end -->
        </div>
    @endforeach
    <!-- Pagination start -->
    {{ $liked_news->links('pagination::bootstrap-5') }}
    <!-- Pagination end -->
</div>
