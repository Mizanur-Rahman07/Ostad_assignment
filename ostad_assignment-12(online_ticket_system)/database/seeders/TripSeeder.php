<?php

namespace Database\Seeders;

use App\Models\Trip;
use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dhaka = Location::where('name', 'Dhaka')->first();
        $comilla = Location::where('name', 'Comilla')->first();
        $chittagong = Location::where('name', 'Chittagong')->first();
        $coxsBazaar = Location::where('name', "Cox's Bazaar")->first();

        Trip::create(['date' => '2023-12-25', 'location_id' => $dhaka->id]);
        Trip::create(['date' => '2023-12-26', 'location_id' => $comilla->id]);
        Trip::create(['date' => '2023-12-27', 'location_id' => $chittagong->id]);
        Trip::create(['date' => '2023-12-28', 'location_id' => $coxsBazaar->id]);
    }
}
