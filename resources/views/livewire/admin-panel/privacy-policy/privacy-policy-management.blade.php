<!-- Edit Privacy Policy Modal Start -->
<div wire:ignore class="modal fade" id="editPrivacyPolicyModal" data-bs-backdrop="static" data-bs-keyboard="false"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    Update Privacy Policy
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit="update_privacy_policy({{ $settings->id }})">
                    <div class="form-group mb-3">
                        <label for="editBooksDescription" class="fw-bold mb-2">Privacy Policy</label>
                        <textarea class="form-control" id="editPrivacyPolicy" name="data" cols="30" rows="6"
                            wire:model="privacy_policy" data-privacy-policy="@this">{{ $settings->privacy_policy }}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" id="updateButton">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Privacy Policy Modal End -->

<!-- CK editor script initialize  -->
@push('handleCkeditor')
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
    <script src="{{ asset('assets/js/handleCkeditor.js') }}"></script>
    <script>
        handleCkeditor("#editPrivacyPolicy", "data-privacy-policy", "privacy_policy", "#updateButton");
    </script>
@endpush
<!-- CK editor script end  -->
