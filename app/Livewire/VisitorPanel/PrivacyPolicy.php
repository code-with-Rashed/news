<?php

namespace App\Livewire\VisitorPanel;

use App\Models\Setting;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('VisitorPanel.index')]
#[Title('Privacy Policy')]
class PrivacyPolicy extends Component
{
    public function render()
    {
        $privacy_policy = Setting::select(['privacy_policy'])->first();
        return view('livewire.visitor-panel.privacy-policy')->with(compact('privacy_policy'));
    }
}
