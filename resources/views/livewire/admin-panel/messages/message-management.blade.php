<!-- Detail Message Modal Start -->
<div wire:ignore.self class="modal fade" id="detailMessageModal" data-bs-backdrop="static" data-bs-keyboard="false"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    Details Message
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Name : </strong> {{ $name }}</p>
                <p><strong>Email : </strong> {{ $email }}</p>
                <p>
                    <strong>Subject : </strong><br />
                    {{ $subject }}
                </p>
                <p>
                    <strong>Message : </strong><br />
                    {{ $fullMessage }}
                </p>
                <hr />
                <div class="d-flex justify-content-end">
                    <button wire:click="open_delete_modal({{ $id }})" type="button"
                        class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        <i class="bi bi-trash"></i>
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Detail Message Modal End -->

<!-- Delete Warning Modal Start -->
<div wire:ignore.self class="modal fade" id="deleteModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <strong>Are You Sure You Wan't to Delete This Message ?</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                    wire:click="delete_message({{ $id }})">
                    Yes
                </button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    No
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Delete Warning Modal End -->
