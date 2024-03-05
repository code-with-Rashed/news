<?php

namespace App\Livewire\VisitorPanel;

use App\Models\Setting;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('VisitorPanel.index')]
#[Title('Terms & Conditions')]
class TermsConditions extends Component
{
    public function render()
    {
        $terms_conditions = Setting::select(['terms_conditions'])->first();
        return view('livewire.visitor-panel.terms-conditions')->with(compact('terms_conditions'));
    }
}
