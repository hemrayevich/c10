<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('classroom')->insert([
            ['location_id'=>1,'name'=>'Classroom 1'],
            ['location_id'=>1,'name'=>'Classroom 2'],
            ['location_id'=>2,'name'=>'Classroom 3'],
            ['location_id'=>2,'name'=>'Classroom 4'],
            ['location_id'=>3,'name'=>'Classroom 5'],
            ['location_id'=>3,'name'=>'Classroom 6'],
            ['location_id'=>3,'name'=>'Classroom 7'],
            ['location_id'=>1,'name'=>'Classroom 8'],
            ['location_id'=>2,'name'=>'Classroom 9'],
            ['location_id'=>2,'name'=>'Classroom 10'],
        ]);
    }
}
