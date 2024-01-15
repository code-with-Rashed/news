<div>
    <div class="row ms-1">
        <div class="col mt-5 bg-white shadow-sm p-4 rounded">
            <h2 class="fw-bold mb-3">Message Management</h2>
            <table class="table table-bordered table-striped text-center">
                <thead class="fs-5">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Rashed</td>
                        <td>rashed@gmail.com</td>
                        <td>Please Help For an Information</td>
                        <td>12/22/2023 - 12:24 pm</td>
                        <td>
                            <button class="btn btn-primary btn-sm m-1" type="button">
                                <i class="bi bi-eye"></i>
                                Read
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-success btn-sm m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#detailMessageModal">
                                <i class="bi bi-file-earmark-break"></i>
                                Details
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
                        <td>Noyon</td>
                        <td>noyon@gmail.com</td>
                        <td>Please Help For Programming</td>
                        <td>12/22/2023 - 12:24 am</td>
                        <td>
                            <button class="btn btn-warning btn-sm m-1" type="button">
                                <i class="bi bi-eye-slash"></i>
                                Un-Read
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-success btn-sm m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#detailMessageModal">
                                <i class="bi bi-file-earmark-break"></i>
                                Details
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
                        <td>Raihan</td>
                        <td>raihan@gmail.com</td>
                        <td>Please Help For SEO</td>
                        <td>08/22/2023 - 11:24 pm</td>
                        <td>
                            <button class="btn btn-primary btn-sm m-1" type="button">
                                <i class="bi bi-eye"></i>
                                Read
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-success btn-sm m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#detailMessageModal">
                                <i class="bi bi-file-earmark-break"></i>
                                Details
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
                        <td>Arafat</td>
                        <td>arafat@gmail.com</td>
                        <td>Please Help For an Information</td>
                        <td>10/20/2023 - 12:24 am</td>
                        <td>
                            <button class="btn btn-warning btn-sm m-1" type="button">
                                <i class="bi bi-eye-slash"></i>
                                Read
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-success btn-sm m-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#detailMessageModal">
                                <i class="bi bi-file-earmark-break"></i>
                                Details
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
    {{-- Message Management Modal Start --}}
    <livewire:admin-panel.messages.message-management />
    {{-- Message Management Modal End --}}
</div>
