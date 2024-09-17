<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['name' => 'Dhaka', 'status' => 1],
            ['name' => 'Barishal', 'status' => 1],
            ['name' => 'Khulna', 'status' => 1],
            ['name' => 'Rajshahi', 'status' => 1],
            ['name' => 'Sylhet', 'status' => 1]
        ];

        City::insert($cities);
    }
}
