<div>
    <div class="row ms-1">
        <div class="col mt-5 bg-white shadow-sm p-4 rounded">
            <h2 class="fw-bold mb-3">Writers Management</h2>
            <button class="btn btn-primary fw-bold py-2 mb-3" type="button" data-bs-toggle="modal"
                data-bs-target="#addWriterModal">
                <i class="bi bi-plus-square me-1"></i>
                Add New Writer
            </button>
            <table class="table table-bordered table-striped text-center">
                <thead class="fs-5">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>News Write</th>
                        <th>Join Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Rashed alam</td>
                        <td>rashed@gmail.com</td>
                        <td>Admin</td>
                        <td>14</td>
                        <td>12/22/2023</td>
                        <td>
                            <button class="btn btn-success btn-sm m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#detailWriterModal">
                                <i class="bi bi-file-earmark-break"></i>
                                Details
                            </button>
                            <button class="btn btn-primary btn-sm m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#editWriterModal">
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
                        <td>1</td>
                        <td>Noyon ali</td>
                        <td>noyon@gmail.com</td>
                        <td>Writer</td>
                        <td>40</td>
                        <td>09/22/2023</td>
                        <td>
                            <button class="btn btn-success btn-sm m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#detailWriterModal">
                                <i class="bi bi-file-earmark-break"></i>
                                Details
                            </button>
                            <button class="btn btn-primary btn-sm m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#editWriterModal">
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
                        <td>Raihan islam</td>
                        <td>raihan@gmail.com</td>
                        <td>Modaratior</td>
                        <td>20</td>
                        <td>12/22/2023</td>
                        <td>
                            <button class="btn btn-success btn-sm m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#detailWriterModal">
                                <i class="bi bi-file-earmark-break"></i>
                                Details
                            </button>
                            <button class="btn btn-primary btn-sm m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#editWriterModal">
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
                        <td>Arafat islam</td>
                        <td>arafat@gmail.com</td>
                        <td>Writer</td>
                        <td>10</td>
                        <td>10/22/2023</td>
                        <td>
                            <button class="btn btn-success btn-sm m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#detailWriterModal">
                                <i class="bi bi-file-earmark-break"></i>
                                Details
                            </button>
                            <button class="btn btn-primary btn-sm m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#editWriterModal">
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
      {{-- Writers Management Modal Start --}}
      <livewire:admin-panel.writers.writers-management />
      {{-- Writers Management Modal End --}}
</div>
