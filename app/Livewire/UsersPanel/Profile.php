<?php

namespace App\Livewire\UsersPanel;

use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

#[Layout("UsersPanel.index")]
#[Title("Profile")]
class Profile extends Component
{
    use WithFileUploads;
    public $old_photo, $photo, $name, $email;
    public $old_password, $password, $password_confirmation;

    public function logedin_user_id()
    {
        return session()->get('user')['id'];
    }

    public function update_user()
    {
        $id = $this->logedin_user_id();
        $this->validate([
            "photo" => "nullable|image|mimes:png,jpg,jpeg,webp",
            "name" => "required|string|max:100",
            "email" => "required|email|max:100|unique:users,email,$id",
        ]);

        $user = User::find($id);
        $user->name = $this->name;
        $user->email = $this->email;

        if ($this->photo) {
            $image_name = $this->photo->store("media/profile", "public_disk");
            $image = basename($image_name);
            $user->photo = $image;

            if ($this->old_photo != "user.jpg") {
                if (File::exists(public_path("storage/media/profile/" . $this->old_photo))) {
                    File::delete(public_path("storage/media/profile/" . $this->old_photo));
                }
            }
        }

        $user->update();

        $this->reset(['old_photo', 'photo', 'name', 'email']);

        $this->dispatch(
            "alert",
            type: "success",
            title: "Profile information successfuly updated."
        );
    }

    public function change_password()
    {
        $this->validate([
            "old_password" => "required|max:100",
            "password" => "required|min:5|max:100|confirmed",
            "password_confirmation" => "required|min:5|max:100",
        ]);

        $id = $this->logedin_user_id();
        $user = User::find($id);

        if (Hash::check($this->old_password, $user->password)) {

            $user->password = Hash::make($this->password);
            $user->update();

            $this->dispatch(
                "alert",
                type: "success",
                title: "Password is updated."
            );
        } else {
            $this->dispatch(
                "alert",
                type: "error",
                title: "Old Password is Wrong!!"
            );
        }

        $this->reset(['old_password', 'password', 'password_confirmation']);
    }

    public function render()
    {
        $id = $this->logedin_user_id();
        $user = User::find($id);

        $this->old_photo = $user->photo;
        $this->name = $user->name;
        $this->email = $user->email;

        return view('livewire.users-panel.profile');
    }
}
