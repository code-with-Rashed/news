<div>
    <!-- Login Modal Start -->
    <div wire:ignore.self class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="loginModalLabel">Login Now</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        wire:click="resetProperties()"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit="login()">
                        <div class="form-group">
                            <label for="loginEmail" class="fw-bold mb-2">Email</label>
                            <input type="email" class="form-control border" id="loginEmail" maxlength="60"
                                wire:model="email" value="{{ old('email') }}" required />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="loginPassword" class="fw-bold mb-2">Password</label>
                            <input type="password" class="form-control border" id="loginPassword" min="5"
                                maxlength="50" wire:model="password" value="{{ old('password') }}" required />
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">
                                <span class="spinner-border spinner-border-sm" aria-hidden="true" wire:loading></span>
                                Login
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm px-3" data-bs-toggle="modal"
                        data-bs-target="#registerModal" wire:click="resetProperties()">Register</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Modal End -->

    <!-- Register Modal Start -->
    <div wire:ignore.self class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="registerModalLabel">Register Now</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        wire:click="resetProperties()"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit="register()">
                        <div class="form-group">
                            <label for="registerName" class="fw-bold mb-2">Name</label>
                            <input type="text" class="form-control border" id="registerName" maxlength="50"
                                wire:model="name" value="{{ old('name') }}" required />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="registerEmail" class="fw-bold mb-2">Email</label>
                            <input type="email" class="form-control border" id="registerEmail" maxlength="60"
                                wire:model="email" value="{{ old('email') }}" required />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="registerPassword" class="fw-bold mb-2">Password</label>
                            <input type="password" class="form-control border" id="registerPassword" min="5"
                                maxlength="50" wire:model="password" value="{{ old('password') }}" required />
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="registerPassword" class="fw-bold mb-2">Confirm Password</label>
                            <input type="password" class="form-control border" id="registerPassword" min="5"
                                maxlength="50" wire:model="password_confirmation"
                                value="{{ old('password_confirmation') }}" required />
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">
                                <span class="spinner-border spinner-border-sm" aria-hidden="true" wire:loading></span>
                                Register
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm px-3" data-bs-toggle="modal"
                        data-bs-target="#loginModal" wire:click="resetProperties()">Login</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Modal End -->
</div>
