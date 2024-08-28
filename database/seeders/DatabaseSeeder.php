<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AdministratorSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\ImageProductSeeder;
use Database\Seeders\ImageSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\SubCategoryProductSeeder;
use Database\Seeders\SubCategorySeeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {

        $this->call(AdministratorSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubCategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(SubCategoryProductSeeder::class);
        $this->call(ImageProductSeeder::class);
    }
}
