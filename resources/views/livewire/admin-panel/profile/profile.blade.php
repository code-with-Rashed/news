<div>
    <div class="row ms-1">
        <div class="col mt-5 bg-white shadow-sm p-4 rounded">
            <h2 class="fw-bold mb-3">Profile Management</h2>
            <div class="row">
                <!-- Profile Update Area Start -->
                <div class="col-md-6">
                    <form class="shadow rounded p-4" wire:submit="update_writer()">
                        @if ($photo)
                            <div class="mb-4">
                                <img src="{{ $photo->temporaryUrl() }}" alt="Profile-Photo" class="rounded-circle"
                                    width="100px" height="100px" />
                            </div>
                        @else
                            <div class="mb-4">
                                <img src="{{ asset("storage/media/profile/$old_photo") }}" alt="Profile-Photo"
                                    class="rounded-circle" width="100px" height="100px" />
                            </div>
                        @endif
                        <div class="form-group mb-3">
                            <label for="photo" class="mb-1">Change Photo</label>
                            <input type="file" id="photo" class="form-control" accept="image/*"
                                wire:model="photo" />
                            @error('photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="name" class="mb-1">Name</label>
                            <input type="text" id="name" class="form-control" maxlength="100"
                                wire:model="name" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="mb-1">Email</label>
                            <input type="email" id="email" class="form-control" maxlength="100"
                                wire:model="email" />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="role" class="mb-1">Role</label>
                            <input type="text" id="role" class="form-control" required maxlength="10" readonly
                                value="{{ $role }}" />
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <span class="spinner-border spinner-border-sm" aria-hidden="true" wire:loading></span>
                            Update
                        </button>
                    </form>
                </div>
                <!-- Profile Update Area End -->
                <!-- Change Password Area Start -->
                <div class="col-md-6">
                    <form class="shadow rounded p-4" wire:submit="change_password()">
                        <p class="h5 fw-bold mb-3">Update Password</p>
                        <div class="form-group mb-3">
                            <label for="oldPassword" class="mb-1">Old Password</label>
                            <input type="password" wire:model="old_password" id="oldPassword" class="form-control"
                                placeholder="Enter old password" maxlength="100" required />
                            @error('old_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="newPassword" class="mb-1">New Password</label>
                            <input type="password" wire:model="password" id="newPassword" class="form-control"
                                placeholder="Enter new password" maxlength="100" required />
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="confirmPassword" class="mb-1">Confirm Password</label>
                            <input type="password" wire:model="password_confirmation" id="confirmPassword"
                                class="form-control" placeholder="Enter confirm password" maxlength="100" required />
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <span class="spinner-border spinner-border-sm" aria-hidden="true" wire:loading></span>
                            Change Password
                        </button>
                    </form>
                </div>
                <!-- Change Password Area End -->
            </div>
        </div>
    </div>
</div>
