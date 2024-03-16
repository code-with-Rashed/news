<div class="row ms-1 my-3">
    <div class="col bg-white shadow-sm p-4 rounded">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h2 class="card-title m-0">Address Management</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm shadow-none" data-bs-toggle="modal"
                data-bs-target="#addressModal">
                <i class="bi bi-pencil-square"></i> Edit
            </button>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-4">
                    <div class="card-subtitle fw-bold mb-1">Address</div>
                    <p class="card-text">
                        <i class="bi bi-geo-alt me-1"></i><span id="address">{{ $address }}</span>
                    </p>
                </div>
                <div class="mb-4">
                    <div class="card-subtitle fw-bold mb-1">Contact number</div>
                    <p class="card-text">
                        <i class="bi bi-telephone-fill"></i>
                        <span>+{{ $contact }}</span>
                    </p>
                </div>
                <div class="mb-4">
                    <div class="card-subtitle fw-bold mb-1">E-mail</div>
                    <p class="card-text">
                        <i class="bi bi-envelope-fill"></i>
                        <span id="email">{{ $email }}</span>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-4">
                    <div class="card-subtitle fw-bold mb-1">Social links</div>
                    <p class="card-text">
                        <i class="bi bi-facebook fw-bold fs-6 me-1"></i>
                        <span id="facebook" class="text-dark" title="Facebook link">{{ $facebook }}</span>
                    </p>
                    <p class="card-text">
                        <i class="bi bi-twitter fw-bold fs-6 me-1"></i>
                        <span id="twitter" class="text-dark" title="Twitter link">{{ $twitter }}</span>
                    </p>
                    <p class="card-text">
                        <i class="bi bi-linkedin fw-bold fs-6 me-1"></i>
                        <span id="instagram" class="text-decoration-none text-dark"
                            title="Instagram link">{{ $linkedin }}</span>
                    </p>
                </div>
            </div>
            <div class="mb-4">
                <div class="card-subtitle fw-bold mb-1">iframe link</div>
                <iframe src="{{ $map }}" loading="lazy" class="w-100 border p-2" id="iframe"></iframe>
            </div>
        </div>
    </div>
    <!-- Address Management Modal Start -->
    @include('livewire.admin-panel.address.address-management')
    <!-- Address Management Modal End -->
</div>
