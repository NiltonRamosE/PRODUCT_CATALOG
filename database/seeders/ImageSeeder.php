<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;

class ImageSeeder extends Seeder
{

    public function run(): void
    {
        $images = [
            ['img/productos/TECNO_S_00001/1.webp'],
            ['img/productos/TECNO_S_00001/2.webp'],
            ['img/productos/TECNO_S_00001/3.jpg'],
            ['img/productos/TECNO_S_00001/4.jpg'],
            ['img/productos/TECNO_S_00001/5.webp'],
            ['img/productos/TECNO_L_00002/1.webp'],
            ['img/productos/TECNO_L_00002/2.webp'],
            ['img/productos/TECNO_L_00002/3.webp'],
            ['img/productos/TECNO_L_00002/4.webp'],
            ['img/productos/TECNO_L_00002/5.jpg'],
            ['img/productos/TECNO_AE_00003/1.jpg'],
            ['img/productos/TECNO_AE_00003/2.jpg'],
            ['img/productos/ELECT_R_00004/1.webp'],
            ['img/productos/ELECT_L_00005/1.jpg'],
            ['img/productos/ELECT_L_00005/2.webp'],
            ['img/productos/ELECT_L_00005/3.jpg'],
            ['img/productos/ELECT_M_00006/1.webp'],
            ['img/productos/MUEBL_S_00007/1.webp'],
            ['img/productos/MUEBL_C_00008/1.jpg'],
            ['img/productos/MUEBL_MDC_00009/1.jpg'],
            ['img/productos/ROPA_RC_00010/1.webp'],
            ['img/productos/ROPA_RF_00011/1.webp'],
            ['img/productos/ROPA_RD_00012/1.webp'],
            ['img/productos/BELLZ_CDLP_00013/1.webp'],
            ['img/productos/BELLZ_M_00014/1.jpg'],
            ['img/productos/BELLZ_HP_00015/1.webp'],
        ];
        

        foreach ($images as $imageData) {
            $image = new Image();
            $image->route = $imageData[0];
            $image->save();
        }
    }
}
