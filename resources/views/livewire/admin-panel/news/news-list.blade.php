<div>
    <div class="row ms-1">
        <div class="col mt-5 bg-white shadow-sm p-4 rounded">
            <h2 class="fw-bold mb-3">News Management</h2>
            <button class="btn btn-primary fw-bold py-2 mb-3" type="button" data-bs-toggle="modal"
                data-bs-target="#addNewsModal">
                <i class="bi bi-plus-square me-1"></i>
                Add New News
            </button>
            <table class="table table-bordered table-striped text-center">
                <thead class="fs-5">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Writer</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news_list as $news)
                        <tr>
                            <td>{{ $news->id }}</td>
                            <td>{{ substr($news->title, 0, 40) }}...</td>
                            <td>{{ $news->category->name }}</td>
                            <td>{{ $news->writer->name }}</td>
                            <td>{{ date('d/m/Y', strtotime($news->created_at)) }}</td>
                            <td>
                                @if ($news->status)
                                    <button wire:click="status({{ $news->id }})" type="button"
                                        class="btn btn-primary btn-sm">
                                        <i class="bi bi-cloud-arrow-up"></i>
                                        Publish
                                    </button>
                                @else
                                    <button wire:click="status({{ $news->id }})" type="button"
                                        class="btn btn-warning btn-sm">
                                        <i class="bi bi-cloud-arrow-down"></i>
                                        Un-Publish
                                    </button>
                                @endif
                            </td>
                            <td>
                                <button wire:click="details({{ $news->id }})" class="btn btn-success btn-sm m-1" type="button" data-bs-toggle="modal"
                                    data-bs-target="#detailNewsModal">
                                    <i class="bi bi-file-earmark-break"></i>
                                    Details
                                </button>
                                <button wire:click="edit({{ $news->id }})" class="btn btn-primary btn-sm m-1"
                                    type="button" data-bs-toggle="modal" data-bs-target="#editNewsModal">
                                    <i class="bi bi-pencil-square"></i>
                                    Edit
                                </button>
                                <button class="btn btn-danger btn-sm m-1" type="button" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal">
                                    <i class="bi bi-trash"></i>
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- Pagination Start --}}
            {{ $news_list->links() }}
            {{-- Pagination End --}}
        </div>
    </div>
    <!-- News Management Modal Start -->
    @include('livewire.admin-panel.news.news-management')
    <!-- News Management Modal End -->
</div>
<!-- CK editor script initialize  -->
@push('handleCkeditor')
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
    <script src="{{ asset('assets/js/handleCkeditor.js') }}"></script>
    <script>
        handleCkeditor("#writeNews", "data-write-news", "news", "#saveButton")

        window.addEventListener("boot-ck-editor", () => {
            syncCkEditor()
        })

        function syncCkEditor() {
            setTimeout(() => {
                handleCkeditor("#editNews", "data-edit-news", "edit_news", "#updateButton")
            }, 1000)
        }
    </script>
@endpush
<!-- CK editor script end  -->
