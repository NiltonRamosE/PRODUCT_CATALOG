<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ImageProduct;

class ImageProductSeeder extends Seeder
{

    public function run(): void
    {
        $images_products = [
            [1,1],
            [1,2],
            [1,3],
            [1,4],
            [1,5],
            [2,6],
            [2,7],
            [2,8],
            [2,9],
            [2,10],
            [3,11],
            [3,12],
            [4,13],
            [5,14],
            [5,15],
            [5,16],
            [6,17],
            [7,18],
            [8,19],
            [9,20],
            [10,21],
            [11,22],
            [12,23],
            [13,24],
            [14,25],
            [15,26],
        ];        
        
        foreach ($images_products as $images_productData) {
            $images_product = new ImageProduct();
            $images_product->product_id = $images_productData[0];
            $images_product->image_id = $images_productData[1];
            $images_product->save();
        }
    }
}
