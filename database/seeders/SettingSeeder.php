<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting = new Setting();
        $setting->logo = "logo.png";
        $setting->favicon = "fav.png";
        $setting->privacy_policy = "Here is Privacy Policy.";
        $setting->terms_conditions = "Here is Terms & Conditions.";
        $setting->save();
    }
}
