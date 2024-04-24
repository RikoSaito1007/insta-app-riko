<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Note: make sure there is no
        $categories = [
            [
                'name' => 'OOP Programming',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Database Administration',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Laravel Framwork',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'TestCategory2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'TestCategory1',
                'created_at' => now(),
                'updated_at' => now()
            ]
            // note: you can add any name of categories as much as you can
            ];

            $this->category->insert($categories);
        
    }
}
