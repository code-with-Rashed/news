<div>
    <div class="row ms-1">
        <div class="col mt-5 bg-white shadow-sm p-4 rounded">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h2 class="fw-bold mb-3">Terms & Conditions Management</h2>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#editTermsConditionsModal">
                    <i class="bi bi-pencil-square"></i>
                    Edit Terms & Conditions
                </button>
            </div>
            <div class="row">
                <div class="col-10 p-2 rounded shadow-sm m-auto">
                    {!! $settings->terms_conditions !!}
                </div>
            </div>
        </div>
    </div>
    <!-- Terms & Conditions Management Modal Start -->
    @include('livewire.admin-panel.terms-conditions.terms-conditions-management')
    <!-- Terms & Conditions Policy Management Modal End -->
</div>
<!-- CK editor script initialize  -->
@push('handleCkeditor')
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
    <script src="{{ asset('assets/js/handleCkeditor.js') }}"></script>
    <script>
        handleCkeditor("#editTermsConditions", "data-terms-conditions", "terms_conditions", "#updateButton");
    </script>
@endpush
<!-- CK editor script end  -->
