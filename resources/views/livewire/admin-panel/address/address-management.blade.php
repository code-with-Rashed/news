<div wire:ignore.self class="modal fade" id="addressModal" data-bs-backdrop="static" data-bs-keyboard="false"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    Adress Update
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit="update_address()" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Address</label>
                                <div class="input-group">
                                    <span class="input-group-text border-0"><i class="bi bi-geo-alt me-1"></i></span>
                                    <input type="text" name="address" class="form-control shadow-none"
                                        title="Enter your official Address" maxlength="255" required
                                        wire:model="address">
                                </div>
                                @error('address')
                                    <div class="my-1">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">E-mail</label>
                                <div class="input-group">
                                    <span class="input-group-text border-0"><i class="bi bi-envelope-fill"></i></span>
                                    <input type="email" name="email" class="form-control shadow-none"
                                        title="Enter your location Address link" maxlength="255" required
                                        wire:model="email">
                                </div>
                                @error('email')
                                    <div class="my-1">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Contact Number</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text border-0"><i class="bi bi-telephone-fill"></i></span>
                                    <input type="text" name="phone" class="form-control shadow-none"
                                        title="Enter your official Phone Number" maxlength="15" wire:model="contact">
                                </div>
                                @error('contact')
                                    <div class="my-1">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Facebook link</label>
                                <div class="input-group">
                                    <span class="input-group-text border-0"><i class="bi bi-facebook"></i></span>
                                    <input type="url" name="facebook" class="form-control shadow-none"
                                        title="Enter your Facebook link" maxlength="255" required wire:model="facebook">
                                </div>
                                @error('facebook')
                                    <div class="my-1">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Twitter link</label>
                                <div class="input-group">
                                    <span class="input-group-text border-0"><i class="bi bi-twitter"></i></span>
                                    <input type="url" name="twitter" class="form-control shadow-none"
                                        title="Enter your Twitter link" maxlength="255" required wire:model="twitter">
                                </div>
                                @error('twitter')
                                    <div class="my-1">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Linkedin link</label>
                                <div class="input-group">
                                    <span class="input-group-text border-0"><i class="bi bi-instagram"></i></span>
                                    <input type="url" name="instagram" class="form-control shadow-none"
                                        title="Enter your Instagram link" maxlength="255" required
                                        wire:model="linkedin">
                                </div>
                                @error('linkedin')
                                    <div class="my-1">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Iframe link</label>
                                <div class="input-group">
                                    <span class="input-group-text border-0"><i class="bi bi-map"></i></span>
                                    <input type="url" name="iframe_link" class="form-control shadow-none"
                                        title="Enter your Iframe link" required wire:model="map">
                                </div>
                                @error('map')
                                    <div class="my-1">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                            <span class="spinner-border spinner-border-sm" aria-hidden="true" wire:loading></span>
                            SAVE
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
