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
                    @foreach ($messages as $message)
                        <tr>
                            <td>{{ $message->id }}</td>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->subject }}</td>
                            <td>{{ $message->created_at }}</td>
                            <td>
                                @if ($message->status == 1)
                                    <button class="btn btn-primary btn-sm m-1" type="button" wire:click="status({{$message->id}})">
                                        <i class="bi bi-eye"></i>
                                        Read
                                    </button>
                                @else
                                    <button class="btn btn-warning btn-sm m-1" type="button" wire:click="status({{$message->id}})">
                                        <i class="bi bi-eye-slash"></i>
                                        Un-Read
                                    </button>
                                @endif
                            </td>
                            <td>
                                <button wire:click="details_message({{$message->id}})" class="btn btn-success btn-sm m-1" type="button" data-bs-toggle="modal" data-bs-target="#detailMessageModal">
                                    <i class="bi bi-file-earmark-break"></i>
                                    Details
                                </button>
                                <button wire:click="open_delete_modal({{$message->id}})"  class="btn btn-danger btn-sm m-1" type="button" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal">
                                    <i class="bi bi-trash"></i>
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Pagination Start -->
            {{ $messages->links() }}
            <!-- Pagination End -->
        </div>
    </div>
    <!-- Message Management Modal Start -->
    @include('livewire.admin-panel.messages.message-management')
    <!-- Message Management Modal End -->
</div>
