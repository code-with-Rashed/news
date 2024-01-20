<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $temporary_categories = ["International","Politics","Travel","Lifestyle","Business"]; 
        for ($i=0; $i < count($temporary_categories); $i++) { 
            $category = new Category();
            $category->name = $temporary_categories[$i];
            $category->save();
        }
    }
}
