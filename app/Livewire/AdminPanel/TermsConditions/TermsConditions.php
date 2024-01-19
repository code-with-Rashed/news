<?php

namespace App\Livewire\AdminPanel\TermsConditions;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Setting;

#[Layout("AdminPanel.index")]
#[Title("Terms & Conditions Management")]

class TermsConditions extends Component
{
    public $terms_conditions;

    public function update_terms_conditions($id)
    {
        $this->validate([
            "terms_conditions" => "required|string"
        ]);

        $settings = Setting::find($id);
        if (!is_null($settings)) {
            $settings->terms_conditions = $this->terms_conditions;
            $settings->update();
        }

        $this->reset("terms_conditions");

        $this->dispatch(
            "bs-modal-hide",
            name: "editTermsConditionsModal"
        );

        $this->dispatch(
            "alert",
            type: "success",
            title: "Terms & Conditions Updated."
        );
    }
    public function render()
    {
        $settings = Setting::select("id", "terms_conditions")->first();
        return view('livewire.admin-panel.terms-conditions.terms-conditions')->with(compact("settings"));
    }
}
