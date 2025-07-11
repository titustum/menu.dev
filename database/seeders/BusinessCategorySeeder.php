<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $business_categories = [
            [
                'name' => 'Restaurant',
                'description' => 'A place where meals are served to customers.',
            ],
            [
                'name' => 'Cafe',
                'description' => 'A small restaurant serving light refreshments and drinks.',
            ],
            [
                'name' => 'Bar',
                'description' => 'An establishment serving alcoholic beverages.',
            ],
            [
                'name' => 'Bakery',
                'description' => 'A place where bread, pastries, and cakes are made and sold.',
            ],
            [
                'name' => 'Food Truck',
                'description' => 'A mobile kitchen that serves food from a truck.',
            ],
        ];

        foreach ($business_categories as $category) {
            \App\Models\BusinessCategory::create($category);
        }
    }
}
