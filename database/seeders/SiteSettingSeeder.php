<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteSetting;

class SiteSettingSeeder extends Seeder
{
public function run()
{
    SiteSetting::updateOrCreate(
        ['id' => 1],
        [
            'site_name' => 'LPPMI',
            'site_subtitle' => 'Default Subtitle',
            'phone' => null,
            'email' => null,
            'address' => null,
            'facebook' => null,
            'twitter' => null,
            'instagram' => null,
            'youtube' => null,
        ]
    );
}
}
