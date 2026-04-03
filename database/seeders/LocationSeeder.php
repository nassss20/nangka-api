<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        $locations = [
            'Mydin Meru', 'Mydin RTC', 'Giant Tambun', 'Cold Storage Sentra Mall', 'Wholesale'
        ];
        foreach ($locations as $loc) {
            Location::firstOrCreate(['name' => $loc], ['default_price' => 6.99]);
        }
    }
}
