<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('locations')->insert([
            ['name'=>'Location 1'],
            ['name'=>'Location 2'],
            ['name'=>'Location 3'],
        ]);
    }
}
