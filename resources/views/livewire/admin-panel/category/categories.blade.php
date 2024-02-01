<div>
    <div class="row ms-1">
        <div class="col mt-5 bg-white shadow-sm p-4 rounded">
            <h2 class="fw-bold mb-3">Category Management</h2>
            <button class="btn btn-primary fw-bold py-2 mb-3" type="button" data-bs-toggle="modal"
                data-bs-target="#addCategoryModal">
                <i class="bi bi-plus-square me-1"></i>
                Add New Category
            </button>
            <table class="table table-bordered table-striped text-center">
                <thead class="fs-5">
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Total News</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ count($category->news) }}</td>
                            <td>
                                <button wire:click="open_editable_category_modal({{ $category->id }})"
                                    class="btn btn-success btn-sm m-1" type="button" data-bs-toggle="modal"
                                    data-bs-target="#editCategoryModal">
                                    <i class="bi bi-pencil-square"></i>
                                    Edit
                                </button>
                                <button wire:click="open_confirmed_deletable_category_modal({{ $category->id }})"
                                    class="btn btn-danger btn-sm m-1" type="button" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal">
                                    <i class="bi bi-trash"></i>
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Pagination start -->
            {{ $categories->links() }}
            <!-- Pagination end -->
        </div>
    </div>
    <!-- Category Management Modal Start -->
    @include('livewire.admin-panel.category.category-management')
    <!-- Category Management Modal End -->
</div>
