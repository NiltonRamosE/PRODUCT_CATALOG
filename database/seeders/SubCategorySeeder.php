<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubCategory;

class SubCategorySeeder extends Seeder
{
    public function run(): void
    {
        $sub_categories = [
            [1, 'Smartphones'],       // Subcategorías para Tecnología (category_id = 1)
            [1, 'Laptops'],
            [1, 'Accesorios electrónicos'],
            
            [2, 'Refrigeradores'],    // Subcategorías para Electrodomésticos (category_id = 2)
            [2, 'Lavadoras'],
            [2, 'Microondas'],
            
            [3, 'Sofás'],             // Subcategorías para Muebles (category_id = 3)
            [3, 'Camas'],
            [3, 'Mesas de comedor'],
            
            [4, 'Ropa Casual'],       // Subcategorías para Ropa (category_id = 4)
            [4, 'Ropa Formal'],
            [4, 'Ropa Deportiva'],
            
            [5, 'Cuidado de la Piel'], // Subcategorías para Belleza y Cuidado Personal (category_id = 5)
            [5, 'Maquillaje'],
            [5, 'Higiene Personal'],
            
            [6, 'Ficción'],           // Subcategorías para Libros (category_id = 6)
            [6, 'No Ficción'],
            [6, 'Educativos'],
            
            [7, 'Juguetes para Niños'], // Subcategorías para Juguetes y Juegos (category_id = 7)
            [7, 'Juegos de Mesa'],
            [7, 'Rompecabezas'],
            
            [8, 'Equipos de Ejercicio'], // Subcategorías para Deportes y Aire Libre (category_id = 8)
            [8, 'Ropa Deportiva'],
            [8, 'Accesorios Deportivos'],
            
            [9, 'Accesorios para Autos'], // Subcategorías para Automotriz (category_id = 9)
            [9, 'Herramientas'],
            [9, 'Repuestos'],
            
            [10, 'Suplementos'],      // Subcategorías para Salud y Bienestar (category_id = 10)
            [10, 'Equipos de Ejercicio'],
            [10, 'Bienestar General'],
        ];        
        
        foreach ($sub_categories as $sub_categoryData) {
            $sub_category = new SubCategory();
            $sub_category->category_id = $sub_categoryData[0];
            $sub_category->name = $sub_categoryData[1];
            $sub_category->save();
        }
    }
}
