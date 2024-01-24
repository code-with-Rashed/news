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
                        <th>Roll</th>
                        <th>News Write</th>
                        <th>Joining Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($writers as $writer)
                        <tr>
                            <td>{{ $writer->id }}</td>
                            <td>{{ $writer->name }}</td>
                            <td>{{ $writer->email }}</td>
                            <td>{{ $writer->roll }}</td>
                            <td>{{ $writer->writed_news }}</td>
                            <td>{{ date('d/m/Y', strtotime($writer->created_at)) }}</td>
                            <td>
                                @if ($writer->status == 1)
                                    <button class="btn btn-primary btn-sm m-1" type="button"
                                        wire:click="status({{ $writer->id }})">
                                        <i class="bi bi-check2-all"></i>
                                        Active
                                    </button>
                                @else
                                    <button class="btn btn-warning btn-sm m-1" type="button"
                                        wire:click="status({{ $writer->id }})">
                                        <i class="bi bi-exclamation-triangle"></i>
                                        In-Active
                                    </button>
                                @endif
                            </td>
                            <td>
                                <button class="btn btn-success btn-sm m-1" type="button" data-bs-toggle="modal"
                                    data-bs-target="#detailWriterModal">
                                    <i class="bi bi-file-earmark-break"></i>
                                    Details
                                </button>
                                <button wire:click="open_editable_writer_modal({{ $writer->id }})" class="btn btn-primary btn-sm m-1" type="button" data-bs-toggle="modal"
                                    data-bs-target="#editWriterModal">
                                    <i class="bi bi-pencil-square"></i>
                                    Edit
                                </button>
                                <button wire:click="open_confirmed_deletable_writer_modal({{ $writer->id }})"
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
            <!-- Pagination Start-->
            {{ $writers->links() }}
            <!-- Pagination End-->
        </div>
    </div>
    <!-- Writers Management Modal Start -->
    @include('livewire.admin-panel.writers.writers-management')
    <!-- Writers Management Modal End -->
</div>
