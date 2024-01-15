<div class="row p-4 bg-white ms-1 shadow-sm">
    <div class="col-md-6">
        <button type="button" class="btn btn-outline-dark btn-sm shadow-none" title="collapse">
            <i class="bi bi-list-ul fw-bold fs-5"></i>
        </button>
    </div>
    <div class="col-md-6 d-flex justify-content-end">
        <div class="btn-group">
            <button type="button" class="btn btn-outline-dark btn-sm shadow-none dropdown-toggle"
                data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                <img src="{{asset("storage/media/profile/user.jpg")}}" alt="profile-photo" width="30px" height="30px" class="rounded-circle" />
                <strong>Rashed alam</strong>
            </button>
            <ul class="dropdown-menu dropdown-menu-lg-end">
                <li><a href="{{route("admin.profile")}}" class="dropdown-item">Profile</a></li>
                <li><a href="" class="dropdown-item">Logout</a></li>
            </ul>
        </div>
    </div>
</div>
