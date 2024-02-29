<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample data to seed into the categories table
        $categories = [
            [
                'name' => 'Engine oil',
                'slug' => 'Engine oil',
                'description' => 'Description of Category 1',
                'meta_title' => 'Meta Title for Category 1',
                'meta_keyword' => 'Meta Keyword for Category 1',
                'meta_description' => 'Meta Description for Category 1',
                'status' => 0
            ],
            [
                'name' => 'Wheels',
                'slug' => 'Wheels',
                'description' => 'Description of Category 2',
                'meta_title' => 'Meta Title for Category 2',
                'meta_keyword' => 'Meta Keyword for Category 2',
                'meta_description' => 'Meta Description for Category 2',
                'status' => 0
            ],
            [
                'name' => 'Engine parts',
                'slug' => 'Engine parts',
                'description' => 'Description of Category 2',
                'meta_title' => 'Meta Title for Category 2',
                'meta_keyword' => 'Meta Keyword for Category 2',
                'meta_description' => 'Meta Description for Category 2',
                'status' => 0
            ],
            [
                'name' => 'Rim and mags',
                'slug' => 'Rim and mags',
                'description' => 'Description of Category 2',
                'meta_title' => 'Meta Title for Category 2',
                'meta_keyword' => 'Meta Keyword for Category 2',
                'meta_description' => 'Meta Description for Category 2',
                'status' => 0
            ],
            [
                'name' => 'Fairings',
                'slug' => 'Fairings',
                'description' => 'Description of Category 2',
                'meta_title' => 'Meta Title for Category 2',
                'meta_keyword' => 'Meta Keyword for Category 2',
                'meta_description' => 'Meta Description for Category 2',
                'status' => 0
            ],
            [
                'name' => 'Suspensions',
                'slug' => 'Suspensions',
                'description' => 'Description of Category 2',
                'meta_title' => 'Meta Title for Category 2',
                'meta_keyword' => 'Meta Keyword for Category 2',
                'meta_description' => 'Meta Description for Category 2',
                'status' => 0
            ],
            [
                'name' => 'Handle grip',
                'slug' => 'Handle grip',
                'description' => 'Description of Category 2',
                'meta_title' => 'Meta Title for Category 2',
                'meta_keyword' => 'Meta Keyword for Category 2',
                'meta_description' => 'Meta Description for Category 2',
                'status' => 0
            ],
            [
                'name' => 'Side mirror',
                'slug' => 'Side mirror',
                'description' => 'Description of Category 2',
                'meta_title' => 'Meta Title for Category 2',
                'meta_keyword' => 'Meta Keyword for Category 2',
                'meta_description' => 'Meta Description for Category 2',
                'status' => 0
            ],
            [
                'name' => 'Seat cover',
                'slug' => 'Seat cover',
                'description' => 'Description of Category 2',
                'meta_title' => 'Meta Title for Category 2',
                'meta_keyword' => 'Meta Keyword for Category 2',
                'meta_description' => 'Meta Description for Category 2',
                'status' => 0
            ],
            [
                'name' => 'Swing arm',
                'slug' => 'Swing arm',
                'description' => 'Description of Category 2',
                'meta_title' => 'Meta Title for Category 2',
                'meta_keyword' => 'Meta Keyword for Category 2',
                'meta_description' => 'Meta Description for Category 2',
                'status' => 0
            ],
            [
                'name' => 'Exhaust pipe',
                'slug' => 'Exhaust pipe',
                'description' => 'Description of Category 2',
                'meta_title' => 'Meta Title for Category 2',
                'meta_keyword' => 'Meta Keyword for Category 2',
                'meta_description' => 'Meta Description for Category 2',
                'status' => 0
            ],
            [
                'name' => 'Interior',
                'slug' => 'Interior',
                'description' => 'Description of Category 2',
                'meta_title' => 'Meta Title for Category 2',
                'meta_keyword' => 'Meta Keyword for Category 2',
                'meta_description' => 'Meta Description for Category 2',
                'status' => 0
            ],
            [
                'name' => 'Handle bar',
                'slug' => 'Handle bar',
                'description' => 'Description of Category 2',
                'meta_title' => 'Meta Title for Category 2',
                'meta_keyword' => 'Meta Keyword for Category 2',
                'meta_description' => 'Meta Description for Category 2',
                'status' => 0
            ],
            [
                'name' => 'Headlight',
                'slug' => 'Headlight',
                'description' => 'Description of Category 2',
                'meta_title' => 'Meta Title for Category 2',
                'meta_keyword' => 'Meta Keyword for Category 2',
                'meta_description' => 'Meta Description for Category 2',
                'status' => 0
            ],
            [
                'name' => 'Tail Light',
                'slug' => 'Tail Light',
                'description' => 'Description of Category 2',
                'meta_title' => 'Meta Title for Category 2',
                'meta_keyword' => 'Meta Keyword for Category 2',
                'meta_description' => 'Meta Description for Category 2',
                'status' => 0
            ],
            [
                'name' => 'Accessories',
                'slug' => 'Accessories',
                'description' => 'Description of Category 2',
                'meta_title' => 'Meta Title for Category 2',
                'meta_keyword' => 'Meta Keyword for Category 2',
                'meta_description' => 'Meta Description for Category 2',
                'status' => 0
            ],
            [
                'name' => 'CVT Parts',
                'slug' => 'CVT Parts',
                'description' => 'Description of Category 2',
                'meta_title' => 'Meta Title for Category 2',
                'meta_keyword' => 'Meta Keyword for Category 2',
                'meta_description' => 'Meta Description for Category 2',
                'status' => 0
            ],
            [
                'name' => 'Chain and Sprockets',
                'slug' => 'Chain and Sprockets',
                'description' => 'Description of Category 2',
                'meta_title' => 'Meta Title for Category 2',
                'meta_keyword' => 'Meta Keyword for Category 2',
                'meta_description' => 'Meta Description for Category 2',
                'status' => 0
            ],
            [
                'name' => 'Chassis',
                'slug' => 'Chassis',
                'description' => 'Description of Category 2',
                'meta_title' => 'Meta Title for Category 2',
                'meta_keyword' => 'Meta Keyword for Category 2',
                'meta_description' => 'Meta Description for Category 2',
                'status' => 0
            ],
            [
                'name' => 'Carburetor / Throttle ',
                'slug' => 'Carburetor / Throttle ',
                'description' => 'Description of Category 2',
                'meta_title' => 'Meta Title for Category 2',
                'meta_keyword' => 'Meta Keyword for Category 2',
                'meta_description' => 'Meta Description for Category 2',
                'status' => 0
            ],
            [
                'name' => 'body',
                'slug' => 'body',
                'description' => 'Description of Category 2',
                'meta_title' => 'Meta Title for Category 2',
                'meta_keyword' => 'Meta Keyword for Category 2',
                'meta_description' => 'Meta Description for Category 2',
                'status' => 0
            ],
            [
                'name' => 'Filters',
                'slug' => 'Filters',
                'description' => 'Description of Category 2',
                'meta_title' => 'Meta Title for Category 2',
                'meta_keyword' => 'Meta Keyword for Category 2',
                'meta_description' => 'Meta Description for Category 2',
                'status' => 0
            ],
            [
                'name' => 'Cleaning Materials',
                'slug' => 'Cleaning Materials',
                'description' => 'Description of Category 2',
                'meta_title' => 'Meta Title for Category 2',
                'meta_keyword' => 'Meta Keyword for Category 2',
                'meta_description' => 'Meta Description for Category 2',
                'status' => 0
            ],


        ];

        // Insert the data into the categories table
        foreach ($categories as $categoryData) {
            Category::create($categoryData);
        }
    }
}
