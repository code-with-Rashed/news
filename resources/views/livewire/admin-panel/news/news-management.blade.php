<!-- Add News Modal Start -->
<div wire:ignore.self class="modal fade" id="addNewsModal" data-bs-backdrop="static" data-bs-keyboard="false"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    Add New News
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="resetProperties()"></button>
            </div>
            <div class="modal-body">
                <form wire:submit="add_news()">
                    <div class="form-group mb-3">
                        <label for="image" class="fw-bold mb-2">Image</label>
                        <input wire:model="image" type="file" id="image" class="form-control" accept="image/*"
                            required />
                        @if ($image)
                            <img src="{{ $image->temporaryUrl() }}" alt="Preview image"
                                class="w-25 my-3 d-block m-auto rounded" loading="lazy" />
                        @endif
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="category" class="fw-bold mb-2">Category</label>
                        <select wire:model="category_id" id="category" class="form-control" required>
                            <option value="" selected>Select a Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="title" class="fw-bold mb-2">Title</label>
                        <input wire:model="title" type="text" class="form-control border" id="name" required
                            placeholder="Title...." maxlength="255" />
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3" wire:ignore>
                        <label for="news" class="fw-bold mb-2">News</label>
                        <textarea class="form-control" data-write-news="@this" id="writeNews" cols="30" rows="6"
                            placeholder="News...."></textarea>
                    </div>
                    @error('news')
                        <span class="text-danger mb-2 d-block">{{ $message }}</span>
                    @enderror
                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary" id="saveButton">
                            <i class="bi bi-cloud-arrow-up"></i>
                            Save
                            <span class="spinner-border spinner-border-sm" aria-hidden="true" wire:loading></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add News Modal End -->

<!-- Edit News Modal Start -->

<div wire:ignore.self class="modal fade" id="editNewsModal" data-bs-backdrop="static" data-bs-keyboard="false"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    Update News
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="resetProperties()"></button>
            </div>
            <div class="modal-body">
                <form wire:submit="update({{ $id }})">
                    <div class="form-group mb-3">
                        <label for="image" class="fw-bold mb-2">Current Image</label>
                        <img src="{{ asset('storage/media/news/' . $current_image) }}" alt="current image"
                            class="w-25 my-3 d-block m-auto rounded" loading="lazy" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="image" class="fw-bold mb-2">Chose Another Image</label>
                        <input type="file" id="image" class="form-control" accept="image/*" wire:model="image"
                            onchange="syncCkEditor()" />
                        @if ($image)
                            <img src="{{ $image->temporaryUrl() }}" alt="Preview image"
                                class="w-25 my-3 d-block m-auto rounded" />
                        @endif
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="update_category" class="fw-bold mb-2">Category</label>
                        <select wire:model="category_id" id="update_category" class="form-control" required>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if ($category->id == $category_id) selected @endif>
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('category_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group mb-3">
                        <label for="title" class="fw-bold mb-2">Title</label>
                        <input type="text" class="form-control border" id="name" required wire:model="title"
                            maxlength="255" />
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="editNews" class="fw-bold mb-2">Edit News</label>
                        <textarea class="form-control" data-edit-news="@this" id="editNews" cols="30" rows="6"
                            placeholder="News....">{{ $edit_news }}</textarea>
                    </div>
                    @error('news')
                        <span class="text-danger mb-2 d-block">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" id="updateButton">
                            <span class="spinner-border spinner-border-sm" aria-hidden="true" wire:loading></span>
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit News Modal End -->

<!-- Details News Modal Start -->
<div wire:ignore.self class="modal fade" id="detailNewsModal" data-bs-backdrop="static" data-bs-keyboard="false"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    Details News
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="resetProperties()"></button>
            </div>
            <div class="modal-body">
                <p>
                    {{ $title }}
                </p>
                <img src="{{ asset('storage/media/news/' . $details_image) }}" alt="news image"
                    class="w-100 rounded" height="400px" style="object-fit: cover" />
                <div class="mt-3 d-flex justify-content-between">
                    <div>
                        <button type="button" class="btn btn-sm btn-primary" title="Likes">
                            <i class="bi bi-hand-thumbs-up"></i>
                            {{ $news_summary['total_likes'] ?? 0 }}
                        </button>
                        <button type="button" class="btn btn-sm btn-secondary mx-1" title="Dislikes">
                            <i class="bi bi-hand-thumbs-down"></i>
                            {{ $news_summary['total_dislikes'] ?? 0 }}
                        </button>
                        <button type="button" class="btn btn-sm btn-primary" title="Comments">
                            <i class="bi bi-chat"></i>
                            {{ $news_summary['total_comments'] ?? 0 }}
                        </button>
                        <button type="button" class="btn btn-sm btn-primary" title="Views">
                            <i class="bi bi-graph-up-arrow"></i>
                            {{ $news_summary['total_views'] ?? 0 }}
                        </button>
                    </div>
                    <div class="ms-auto">
                        <span title="Category" class="me-2"><i class="bi bi-tag"></i> {{ $category_name }}</span>
                        <span title="Author Name" class="me-2"><i class="bi bi-pencil"></i>
                            {{ $writer_name }}</span>
                        <span title="Release Date"><i class="bi bi-calendar3"></i>
                            {{ date('d/m/Y', strtotime($created_at)) }}</span>
                    </div>
                </div>
                <div class="my-4">
                    {!! $details_news !!}
                </div>
                <hr />
                <!-- Comments -->
                <div class="accordion shadow-sm" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <strong><i class="bi bi-chat me-1 text-primary"></i>Comments</strong>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @if (isset($comments) && count($comments))
                                    @foreach ($comments as $comment)
                                        <div class="d-flex justify-content-between p-2 shadow-sm mb-1"
                                            wire:key="{{ $comment->id }}">
                                            <div>
                                                <strong>{{ $comment->user->name }}</strong>
                                                <br />
                                                <span>{{ date('d/m/Y', strtotime($comment->created_at)) }}</span>
                                                <br />
                                                <p>{{ $comment->comment }}</p>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-sm btn-primary"
                                                    title="The Comment is Public"
                                                    wire:click="change_comment_status({{ $comment->id }})">
                                                    @if ($comment->status)
                                                        <i class="bi bi-eye"></i>
                                                    @else
                                                        <i class="bi bi-eye-slash"></i>
                                                    @endif
                                                </button>
                                                <button type="button" class="btn btn-sm btn-danger"
                                                    title="Delete Comment"
                                                    wire:click="delete_comment({{ $comment->id }})">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    @endforeach
                                    <button type="button" class="btn btn-sm btn-primary mt-2"
                                        title="More Comments...">
                                        More...
                                    </button>
                                @else
                                    <div class="p-2 shadow-sm mb-1">
                                        <strong>Comment Not Found !!</strong>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Details News Modal End -->

<!-- Delete Warning Modal Start-->
<div wire:ignore.self class="modal fade" id="deleteModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <strong>Are You Sure You Wan't to Delete ?</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                    wire:click="delete({{ $id }})">
                    Yes
                </button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    No
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Details News Modal End -->
