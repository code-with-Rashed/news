<!-- Add new Writer Modal Start -->
<div wire:ignore.self class="modal fade" id="addWriterModal" data-bs-backdrop="static" data-bs-keyboard="false"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    Add New Writer
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit="add_writer()">
                    <div class="form-group mb-3">
                        <label for="name" class="fw-bold mb-2">Name</label>
                        <input type="text" wire:model="name" value="{{ old('name') }}" class="form-control border"
                            id="name" required placeholder="Name" maxlength="100" />
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="fw-bold mb-2">Email</label>
                        <input type="email" wire:model="email" value="{{ old('email') }}" class="form-control border"
                            id="email" required placeholder="Email" maxlength="100" />
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="role" class="fw-bold mb-2">Writer Role</label>
                        <select id="role" class="form-control" required wire:model="role">
                            <option value="" selected>Select a Writer Roll</option>
                            <option value="admin">Admin</option>
                            <option value="moderator">Moderator</option>
                            <option value="writer">Writer</option>
                        </select>
                        @error('role')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="fw-bold mb-2">Password</label>
                        <input type="password" wire:model="password" class="form-control border" id="password" required
                            placeholder="Password" min="5" maxlength="100" />
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="confirmPassword" class="fw-bold mb-2">Confirm Password</label>
                        <input type="password" wire:model="password_confirmation" class="form-control border"
                            id="confirmPassword" required placeholder="Password" min="5" maxlength="100" />
                        @error('password_confirmation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            <span class="spinner-border spinner-border-sm" aria-hidden="true" wire:loading></span>
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add new Writer Modal End -->

<!-- Edit Writer Modal Start -->
<div wire:ignore.self class="modal fade" id="editWriterModal" data-bs-backdrop="static" data-bs-keyboard="false"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    Update Writer
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit="edit_writer({{ $id }})">
                    <div class="form-group mb-3">
                        <label for="name" class="fw-bold mb-2">Name</label>
                        <input type="text" wire:model="name" class="form-control border" id="name" required
                            value="{{ $name }}" maxlength="100" />
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="fw-bold mb-2">Email</label>
                        <input type="email" wire:model="email" class="form-control border" id="email" required
                            value="{{ $email }}" maxlength="100" />
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="role" class="fw-bold mb-2">Writer Roll</label>
                        <select wire:model="role" id="role" class="form-control" required>
                            <option @if ($role == 'admin') selected @endif value="admin">Admin</option>
                            <option @if ($role == 'moderator') selected @endif value="moderator">Moderator
                            </option>
                            <option @if ($role == 'writer') selected @endif value="writer">Writer</option>
                        </select>
                        @error('role')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            <span class="spinner-border spinner-border-sm" aria-hidden="true" wire:loading></span>
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Writer Modal End -->

<!-- Detail Writer Modal Start -->
<div wire:ignore.self class="modal fade modal-lg" id="detailWriterModal" data-bs-backdrop="static"
    data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    Writer Details
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if ($writer_details)
                    <div class="d-flex justify-content-between">
                        <div class="w-100">
                            <p><strong>Name : </strong> {{ $writer_details->name }}</p>
                            <p><strong>Email : </strong> {{ $writer_details->email }}</p>
                            <p><strong>Role : </strong>{{ $writer_details->role }}</p>
                        </div>
                        <div class="w-100">
                            <p><strong>News Write : </strong>{{ $writer_details->news_count }}</p>
                            <p><strong>Join Date : </strong>{{ date('d/m/Y', strtotime($writer_details->created_at)) }}
                            </p>
                            <p><strong>Status : </strong>
                                @if ($writer_details->status)
                                    Active
                                @else
                                    In-Active
                                @endif
                            </p>
                        </div>
                    </div>
                    <hr />
                    <div class="accordion shadow-sm" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <strong><i class="bi bi-newspaper me-1"></i>News</strong>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    @foreach ($writer_details->news as $news)
                                        <div class="d-flex justify-content-between p-1 shadow-sm mb-1">
                                            <div>
                                                <span><i
                                                        class="bi bi-calendar3 me-1"></i>{{ date('d/m/Y', strtotime($news->created_at)) }}</span>
                                                <br />
                                                <p>
                                                    {{ $news->title }}
                                                </p>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-sm btn-primary" title="Details"
                                                    wire:click="writer_news_details({{ $news->id }})" data-bs-toggle="modal"
                                                    data-bs-target="#detailNewsModal">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                            </div>
                                        </div>
                                    @endforeach
                                    <button type="button" class="btn btn-sm btn-primary mt-2" title="More News...">
                                        More...
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- Detail Writer Modal End -->

<!-- Delete Warning Modal Start -->
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
                <button wire:click="delete({{ $id }})" type="button" class="btn btn-danger"
                    data-bs-dismiss="modal">
                    Yes
                </button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    No
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Delete Writer Modal End -->

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
