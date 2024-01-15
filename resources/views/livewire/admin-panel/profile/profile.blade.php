<div>
    <div class="row ms-1">
        <div class="col mt-5 bg-white shadow-sm p-4 rounded">
            <h2 class="fw-bold mb-3">Profile Management</h2>
            <div class="row">
                <!-- Profile Update Area Start -->
                <div class="col-md-6">
                    <form class="shadow rounded p-4">
                        <div class="mb-4">
                        <img src="{{asset("storage/media/profile/user.jpg")}}" alt="Profile-Photo" class="rounded-circle" width="100px" height="100px"/>
                        </div>
                        <div class="form-group mb-3">
                            <label for="photo" class="mb-1">Change Photo</label>
                            <input type="file" id="photo" class="form-control" accept=".png,.jpeg,.jpg" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="name" class="mb-1">Name</label>
                            <input type="text" id="name" class="form-control" value="Rashed alam" required
                                maxlength="30" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="mb-1">Email</label>
                            <input type="email" id="email" class="form-control" value="example@mail.com" required
                                maxlength="50" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="role" class="mb-1">Role</label>
                            <input type="text" id="role" class="form-control" value="Admin" required
                                maxlength="10" readonly />
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                    </form>
                </div>
                <!-- Profile Update Area End -->
                <!-- Change Password Area Start -->
                <div class="col-md-6">
                    <form class="shadow rounded p-4">
                        <p class="h5 fw-bold mb-3">Update Password</p>
                        <div class="form-group mb-3">
                            <label for="oldPassword" class="mb-1">Old Password</label>
                            <input type="password" id="oldPassword" class="form-control"
                                placeholder="Enter old password" maxlength="25" required />
                        </div>
                        <div class="form-group mb-3">
                            <label for="newPassword" class="mb-1">New Password</label>
                            <input type="password" id="newPassword" class="form-control"
                                placeholder="Enter new password" maxlength="25" required />
                        </div>
                        <div class="form-group mb-3">
                            <label for="confirmPassword" class="mb-1">Confirm Password</label>
                            <input type="password" id="confirmPassword" class="form-control"
                                placeholder="Enter confirm password" maxlength="25" required />
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Change Password
                        </button>
                    </form>
                </div>
                <!-- Change Password Area End -->
            </div>
        </div>
    </div>
</div>
