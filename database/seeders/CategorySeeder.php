<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            [
                'name' => 'Frozen Food',
                'slug' => 'frozen-food'
            ],
            [
                'name' => 'Fresh Food',
                'slug' => 'fresh-food'
            ],
            [
                'name' => 'Beverage',
                'slug' => 'beverage'
            ],
            [
                'name' => 'Home Health',
                'slug' => 'home-health'
            ],
            [
                'name' => 'Pet Foods',
                'slug' => 'pet-foods'
            ],   
             [
                'name' => 'Special Deals',
                'slug' => 'special-deals'
            ],

        ];
        DB::table("categories")->insert($category);

    }
}
