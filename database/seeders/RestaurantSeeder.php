<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('restaurants')->insert([
            ['id'=>1 ,'name' => 'Fast_Food'],
            ['id'=>2 ,'name' => 'Cafe'],
            ['id'=>3 ,'name' => 'The Luxury Table'],
        ]);
    }
}
