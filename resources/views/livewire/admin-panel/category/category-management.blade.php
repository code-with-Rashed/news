<!-- Add New Category Modal Start -->
<div wire:ignore.self class="modal fade" id="addCategoryModal" data-bs-backdrop="static" data-bs-keyboard="false"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    Add New Category
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit="add_category">
                    <div class="form-group">
                        <label for="addCategory" class="fw-bold mb-2">Category</label>
                        <input type="text" class="form-control border" id="addCategory" placeholder="Category"
                            maxlength="40" wire:model="name" value="{{ old('name') }}" required />
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add New Category Modal End -->

<!-- Edit Category Modal Start-->
<div wire:ignore.self class="modal fade" id="editCategoryModal" data-bs-backdrop="static" data-bs-keyboard="false"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    Update Category
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit="edit_category({{ $id }})">
                    <div class="form-group">
                        <label for="editCategory" class="fw-bold mb-2">Edit Category</label>
                        <input type="text" class="form-control" id="editCategory" wire:model="name"
                            value="{{ $name }}" maxlength="40" required />
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Category Modal End-->

<!-- Delete warning modal Start-->
<div wire:ignore.self class="modal fade" id="deleteModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <strong>Are You Sure You Wan't to Delete This Category ?</strong>
            </div>
            <div class="modal-footer">
                <button wire:click="delete_category({{ $id }})" type="button" class="btn btn-danger"
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
<!-- Delete warning modal End-->
