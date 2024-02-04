<?php

namespace App\Livewire\AdminPanel\Profile;

use App\Models\Writer;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

#[Layout("AdminPanel.index")]
#[Title("Profile Management")]

class Profile extends Component
{
    use WithFileUploads;
    public $old_photo, $photo, $name, $email, $role;

    public function update_writer()
    {
        $id = session('admin')['id'];
        $this->validate([
            "photo" => "nullable|image|mimes:png,jpg,jpeg,webp",
            "name" => "required|string|max:100",
            "email" => "required|email|max:100|unique:writers,email,$id",
        ]);

        $writer = Writer::find($id);
        $writer->name = $this->name;
        $writer->email = $this->email;

        if ($this->photo) {
            $image_name = $this->photo->store("public/media/profile");
            $image = basename($image_name);
            $writer->photo = $image;

            if ($this->old_photo != "user.jpg") {
                if (Storage::exists("public/media/profile/" . $this->old_photo)) {
                    Storage::delete("public/media/profile/" . $this->old_photo);
                }
            }
        }

        $writer->update();

        $this->reset(['old_photo', 'photo', 'name', 'email', 'role']);

        $this->dispatch(
            "alert",
            type: "success",
            title: "Profile information successfuly updated."
        );
    }

    public function render()
    {
        $id = session('admin')['id'];
        $writer = Writer::find($id);

        $this->old_photo = $writer->photo;
        $this->name = $writer->name;
        $this->email = $writer->email;
        $this->role = $writer->role;

        return view('livewire.admin-panel.profile.profile');
    }
}
