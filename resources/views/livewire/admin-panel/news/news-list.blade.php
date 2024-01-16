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
                    <tr>
                        <td>1</td>
                        <td>Lorem ipsum dolor sit amet....</td>
                        <td>Politics</td>
                        <td>Rashed</td>
                        <td>12/22/2023</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm">
                                <i class="bi bi-cloud-arrow-up"></i>
                                Publish
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-success btn-sm m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#detailNewsModal">
                                <i class="bi bi-file-earmark-break"></i>
                                Details
                            </button>
                            <button class="btn btn-primary btn-sm m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#editNewsModal">
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
                        <td>Lorem ipsum dolor sit amet....</td>
                        <td>Technology</td>
                        <td>Noyon</td>
                        <td>12/22/2023</td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm">
                                <i class="bi bi-cloud-arrow-down"></i>
                                Un-Publish
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-success btn-sm m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#detailNewsModal">
                                <i class="bi bi-file-earmark-break"></i>
                                Details
                            </button>
                            <button class="btn btn-primary btn-sm m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#editNewsModal">
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
                        <td>Lorem ipsum dolor sit amet....</td>
                        <td>Seo</td>
                        <td>Raihan</td>
                        <td>12/22/2023</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm">
                                <i class="bi bi-cloud-arrow-up"></i>
                                Publish
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-success btn-sm m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#detailNewsModal">
                                <i class="bi bi-file-earmark-break"></i>
                                Details
                            </button>
                            <button class="btn btn-primary btn-sm m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#editNewsModal">
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
                        <td>Lorem ipsum dolor sit amet....</td>
                        <td>Lifestyle</td>
                        <td>Arafat</td>
                        <td>12/22/2023</td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm">
                                <i class="bi bi-cloud-arrow-down"></i>
                                Un-Publish
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-success btn-sm m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#detailNewsModal">
                                <i class="bi bi-file-earmark-break"></i>
                                Details
                            </button>
                            <button class="btn btn-primary btn-sm m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#editNewsModal">
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
    {{-- News Management Modal Start --}}
    <livewire:admin-panel.news.news-management />
    {{-- News Management Modal End --}}
</div>
<!-- CK editor script initialize  -->
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor.create(document.querySelector("#addNews"))
    ClassicEditor.create(document.querySelector("#editNews"))
</script>
<!-- CK editor script end  -->
