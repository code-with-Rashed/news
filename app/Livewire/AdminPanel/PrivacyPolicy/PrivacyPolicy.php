<?php

namespace App\Livewire\AdminPanel\PrivacyPolicy;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Setting;

#[Layout("AdminPanel.index")]
#[Title("Privace Policy Management")]

class PrivacyPolicy extends Component
{
    public $privacy_policy;

    public function update_privacy_policy($id)
    {
        $this->validate([
            "privacy_policy" => "required|string"
        ]);

        $settings = Setting::find($id);
        if (!is_null($settings)) {
            $settings->privacy_policy = $this->privacy_policy;
            $settings->update();
        }

        $this->reset("privacy_policy");

        $this->dispatch(
            "bs-modal-hide",
            name: "editPrivacyPolicyModal"
        );

        $this->dispatch(
            "alert",
            type: "success",
            title: "Privacy Policy Updated."
        );
    }

    public function render()
    {
        $settings = Setting::select("id", "privacy_policy")->first();
        $data = compact("settings");
        return view('livewire.admin-panel.privacy-policy.privacy-policy')->with($data);
    }
}
