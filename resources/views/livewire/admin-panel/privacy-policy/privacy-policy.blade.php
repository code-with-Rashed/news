<div>
    <div class="row ms-1">
        <div class="col mt-5 bg-white shadow-sm p-4 rounded">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h2 class="fw-bold mb-3">Privacy Policy Management</h2>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#editPrivacyPolicyModal">
                    <i class="bi bi-pencil-square"></i>
                    Edit Privacy Policy
                </button>
            </div>
            <div class="row">
                <div class="col-10 p-2 rounded shadow-sm m-auto">
                    {!! $settings->privacy_policy !!}
                </div>
            </div>
        </div>
    </div>
    <!-- Privacy Policy Management Modal Start -->
    @include("livewire.admin-panel.privacy-policy.privacy-policy-management")
    <!-- Privacy Policy Management Modal End -->
</div>
