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
                    <tr>
                        <td>1</td>
                        <td>Politics</td>
                        <td>5</td>
                        <td>
                            <button class="btn btn-success btn-sm m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#editCategoryModal">
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
                    <tr>
                        <td>2</td>
                        <td>International</td>
                        <td>10</td>
                        <td>
                            <button class="btn btn-success btn-sm m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#editCategoryModal">
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
                    <tr>
                        <td>3</td>
                        <td>Sports</td>
                        <td>20</td>
                        <td>
                            <button class="btn btn-success btn-sm m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#editCategoryModal">
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
                    <tr>
                        <td>4</td>
                        <td>Lifestyle</td>
                        <td>15</td>
                        <td>
                            <button class="btn btn-success btn-sm m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#editCategoryModal">
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
                </tbody>
            </table>
            <ul class="pagination">
                <li class="page-item">
                    <a href="" class="page-link">Previous</a>
                </li>
                <li class="page-item active">
                    <a href="" class="page-link">1</a>
                </li>
                <li class="page-item"><a href="" class="page-link">2</a></li>
                <li class="page-item"><a href="" class="page-link">3</a></li>
                <li class="page-item"><a href="" class="page-link">4</a></li>
                <li class="page-item"><a href="" class="page-link">Next</a></li>
            </ul>
        </div>
    </div>
    {{-- Category Management Modal Start --}}
    <livewire:admin-panel.category.category-management />
    {{-- Category Management Modal End --}}
</div>
