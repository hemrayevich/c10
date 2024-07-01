<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('branches')->insert([
            ['name'=>'Branch 1'],
            ['name'=>'Branch 2'],
            ['name'=>'Branch 3'],
            ['name'=>'Branch 4'],
            ['name'=>'Branch 5'],
        ]);
    }
}
