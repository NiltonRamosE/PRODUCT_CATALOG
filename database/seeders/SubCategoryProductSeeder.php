<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubCategoryProduct;

class SubCategoryProductSeeder extends Seeder
{

    public function run(): void
    {
        $sub_categories_products = [
            [1,1],
            [1,3],
            [2,2],
            [3,3],
            [4,4],
            [5,5],
            [6,6],
            [7,7],
            [7,30],
            [8,8],
            [8,30],
            [9,9],
            [10,10],
            [10,22],
            [11,11],
            [12,12],
            [13,13],
            [13,30],
            [14,14],
            [15,15],
            [15,30],
        ];        
        
        foreach ($sub_categories_products as $sub_categories_productData) {
            $sub_categories_product = new SubCategoryProduct();
            $sub_categories_product->product_id = $sub_categories_productData[0];
            $sub_categories_product->sub_category_id = $sub_categories_productData[1];
            $sub_categories_product->save();
        }
    }
}
