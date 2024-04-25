<?php

namespace App\Livewire\AdminPanel\Settings;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Setting;
use Illuminate\Support\Facades\File;

#[Layout("AdminPanel.index")]
#[Title("Settings Management")]

class Settings extends Component
{
    use WithFileUploads;

    public $favicon, $logo;

    public function change_favicon($id)
    {
        $this->validate([
            "favicon" => "required|image|mimes:png,jpg,jpeg,webp"
        ]);

        $settings = Setting::find($id);
        if (!is_null($settings)) {
            if (File::exists(public_path("storage/media/favicon/" . $settings->favicon))) {
                File::delete(public_path("storage/media/favicon/" . $settings->favicon));
            }
            $favicon_name = $this->favicon->store("media/favicon", "public_disk");
            $favicon = basename($favicon_name);
            $settings->favicon = $favicon;
            $settings->update();
        }

        $this->reset("favicon");

        $this->dispatch(
            "bs-modal-hide",
            name: "changeFaviconModal"
        );

        $this->dispatch(
            "alert",
            type: "success",
            title: "Favicon changes successfuly."
        );
    }

    public function change_logo($id)
    {
        $this->validate([
            "logo" => "required|image|mimes:png,jpg,jpeg,webp"
        ]);

        $settings = Setting::find($id);
        if (!is_null($settings)) {
            if (File::exists(public_path("storage/media/logo/" . $settings->logo))) {
                File::delete(public_path("storage/media/logo/" . $settings->logo));
            }
            $logo_name = $this->logo->store("media/logo", "public_disk");
            $logo = basename($logo_name);
            $settings->logo = $logo;
            $settings->update();
        }

        $this->reset("logo");

        $this->dispatch(
            "bs-modal-hide",
            name: "changeLogoModal"
        );

        $this->dispatch(
            "alert",
            type: "success",
            title: "Logo changes successfuly."
        );
    }
    public function shutdown($id)
    {
        $settings = Setting::find($id);
        if (!is_null($settings)) {
            $status = $settings->shutdown ? 0 : 1;
            $settings->shutdown = $status;
            $settings->update();

            $this->dispatch(
                "alert",
                type: $status ? "success" : "error",
                title: $status ? "Website is Running now" : "Website is Shutdown now"
            );
        }
    }
    public function render()
    {
        $settings = Setting::select("id", "favicon", "logo", "shutdown")->first();
        return view('livewire.admin-panel.settings.settings')->with(compact("settings"));
    }
}
