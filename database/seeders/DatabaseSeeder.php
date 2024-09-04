<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\User;
use Illuminate\Console\View\Components\Warn;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Location::create([
            'lagos' => 'Lagos',
            'osun' => 'Osun',
            'ibadan' => 'Ibadan',
            'abuja' => 'Abuja'
        ]);
    }

}
