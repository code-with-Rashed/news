<!-- Edit Terms & Conditions Modal Start -->
<div wire:ignore class="modal fade" id="editTermsConditionsModal" data-bs-backdrop="static" data-bs-keyboard="false"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    Update Terms & Conditions
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit="update_terms_conditions({{ $settings->id }})">
                    <div class="form-group mb-3">
                        <label for="editTermsConditions" class="fw-bold mb-2">Terms & Conditions</label>
                        <textarea class="form-control" id="editTermsConditions" name="data" cols="30" rows="6"
                            data-terms-conditions="@this">{{ $settings->terms_conditions }}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" id="updateButton">
                            <span class="spinner-border spinner-border-sm" aria-hidden="true" wire:loading></span>
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Terms & Conditions Modal End -->
