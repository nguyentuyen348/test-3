<?php

namespace Database\Seeders;

use App\Models\Product_category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Product_category();
        $category->name = 'cafe';
        $category->save();

        $category = new Product_category();
        $category->name = 'nước hoa quả';
        $category->save();

        $category = new Product_category();
        $category->name = 'trà sữa';
        $category->save();
    }
}
