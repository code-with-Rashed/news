<div>
    <div class="row ms-1">
        <div class="col mt-5 bg-white shadow-sm p-4 rounded">
            <h2 class="fw-bold mb-3">Settings Management</h2>
            <div class="d-flex">
                <div class="shadow rounded p-3 m-2 w-25 text-center">
                    <div class="h5 mb-2">Favicon</div>
                    <div>
                        <img src="{{ asset('storage/media/favicon/' . $settings->favicon) }}" alt="favicon"
                            title="Current Favicon" />
                    </div>
                    <button type="button" class="btn btn-sm btn-primary mt-2" data-bs-toggle="modal"
                        data-bs-target="#changeFaviconModal">
                        Change Favicon
                    </button>
                </div>
                <div class="shadow rounded p-3 m-2 w-25 text-center">
                    <div class="h5 mb-2">Logo</div>
                    <div>
                        <img src="{{ asset('storage/media/logo/' . $settings->logo) }}" alt="logo" width="60px"
                            title="Current Logo" />
                    </div>
                    <button type="button" class="btn btn-sm btn-primary mt-2" data-bs-toggle="modal"
                        data-bs-target="#changeLogoModal">
                        Change Logo
                    </button>
                </div>
                <div class="shadow rounded p-3 m-2 w-25 text-center">
                    <div class="h5 mb-2">Website Shutdown</div>
                    <div class="form-check form-switch d-flex justify-content-center">
                        <input type="checkbox" class="form-check-input" wire:click="shutdown({{ $settings->id }})"
                            @if ($settings->shutdown == 0) checked title="Website is Running now." @else title="Website is Shutdown now." @endif>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Settings Management Modal Start -->
    @include('livewire.admin-panel.settings.settings-management')
    <!-- Settings Management Modal End -->
</div>
