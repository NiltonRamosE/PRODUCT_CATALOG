<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{

    public function run(): void
    {
        $products = [
            ['TECNO_S_00001', 'iPhone 14 Pro', 'Smartphone de alta gama con cámara avanzada y pantalla OLED.', 999.99, true, 50],
            ['TECNO_L_00002', 'MacBook Air M2', 'Laptop ultraligera con procesador M2, ideal para trabajo portátil.', 1299.99, true, 30],
            ['TECNO_AE_00003', 'Cargador Inalámbrico Qi', 'Cargador rápido para dispositivos compatibles con Qi.', 49.99, true, 200],
        
            ['ELECT_R_00004', 'Refrigerador Samsung', 'Refrigerador con tecnología de ahorro energético.', 799.99, true, 25],
            ['ELECT_L_00005', 'Lavadora LG', 'Lavadora de alta eficiencia con múltiples modos de lavado.', 599.99, true, 15],
            ['ELECT_M_00006', 'Horno Microondas Panasonic', 'Microondas con tecnología Inverter para cocción uniforme.', 199.99, true, 40],
        
            ['MUEBL_S_00007', 'Sofá Seccional', 'Sofá amplio y cómodo, ideal para salas grandes.', 499.99, true, 10],
            ['MUEBL_C_00008', 'Cama King Size', 'Cama de tamaño king con colchón ortopédico.', 899.99, true, 8],
            ['MUEBL_MDC_00009', 'Mesa de Comedor Moderna', 'Mesa de comedor de estilo moderno con capacidad para 6 personas.', 299.99, true, 12],
        
            ['ROPA_RC_00010', 'Camiseta Casual', 'Camiseta de algodón para uso diario.', 19.99, true, 100],
            ['ROPA_RF_00011', 'Traje Formal', 'Traje elegante para ocasiones formales.', 249.99, true, 20],
            ['ROPA_RD_00012', 'Sudadera Deportiva', 'Sudadera cómoda y ligera para entrenamiento.', 49.99, true, 50],
        
            ['BELLZ_CDLP_00013', 'Crema Hidratante', 'Crema facial para piel seca y sensible.', 24.99, true, 150],
            ['BELLZ_M_00014', 'Set de Maquillaje Completo', 'Kit completo de maquillaje con sombras, labiales y más.', 79.99, true, 75],
            ['BELLZ_HP_00015', 'Jabón Antibacterial', 'Jabón líquido con propiedades antibacteriales para higiene diaria.', 5.99, true, 300],
        ];
        
        
        foreach ($products as $productData) {
            $product = new Product();
            $product->code = $productData[0];
            $product->name = $productData[1];
            $product->description = $productData[2];
            $product->price = $productData[3];
            $product->active = $productData[4];
            $product->stock = $productData[5];
            $product->save();
        }
    }
}
