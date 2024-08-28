<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{

    public function run(): void
    {
        $categories = [
            ['Tecnología', 'Dispositivos y gadgets como smartphones, laptops y accesorios.'],
            ['Electrodomésticos', 'Aparatos para el uso diario en el hogar, como refrigeradores y lavadoras.'],
            ['Muebles', 'Diversos tipos de muebles, incluyendo sofás, camas y mesas de comedor.'],
            ['Ropa', 'Prendas de vestir para hombres, mujeres y niños, incluyendo ropa casual y formal.'],
            ['Belleza y Cuidado Personal', 'Productos relacionados con el cuidado de la piel, maquillaje e higiene personal.'],
            ['Libros', 'Una amplia gama de libros de diversos géneros como ficción, no ficción y educativos.'],
            ['Juguetes y Juegos', 'Juguetes, juegos de mesa y rompecabezas para niños y adultos.'],
            ['Deportes y Aire Libre', 'Equipos y accesorios para deportes, fitness y actividades al aire libre.'],
            ['Automotriz', 'Piezas, accesorios y herramientas para automóviles, motocicletas y otros vehículos.'],
            ['Salud y Bienestar', 'Productos enfocados en la salud, el fitness y el bienestar, incluyendo suplementos y equipos de ejercicio.'],
        ];
        

        foreach ($categories as $categoryData) {
            $category = new Category();
            $category->name = $categoryData[0];
            $category->description = $categoryData[1];
            $category->save();
        }
    }
}
