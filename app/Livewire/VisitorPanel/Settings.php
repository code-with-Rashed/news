<?php

namespace App\Livewire\VisitorPanel;

use App\Models\Setting;

class Settings
{
    public function logo()
    {
        $logo = Setting::get('logo');
        return $logo->toArray()[0]['logo'] ?? false;
    }
    public function favicon()
    {
        $favicon = Setting::get('favicon');
        return $favicon->toArray()[0]['favicon'] ?? false;
    }
}
