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
            ['hch', 'img/productos/TECNO_S_00001/1.webp'],
            ['gfgf', 'img/productos/TECNO_S_00001/2.webp'],
            ['hgsdch', 'img/productos/TECNO_S_00001/3.jpg'],
            ['fds', 'img/productos/TECNO_S_00001/4.jpg'],
            ['grger', 'img/productos/TECNO_S_00001/5.webp'],
            ['gergr', 'img/productos/TECNO_L_00002/1.webp'],
            ['gergerger', 'img/productos/TECNO_L_00002/2.webp'],
            ['bvcb', 'img/productos/TECNO_L_00002/3.webp'],
            ['qwe', 'img/productos/TECNO_L_00002/4.webp'],
            ['ewre', 'img/productos/TECNO_L_00002/5.jpg'],
            ['a', 'img/productos/TECNO_AE_00003/1.jpg'],
            ['b', 'img/productos/TECNO_AE_00003/2.jpg'],
            ['c', 'img/productos/ELECT_R_00004/1.webp'],
            ['d', 'img/productos/ELECT_L_00005/1.jpg'],
            ['e', 'img/productos/ELECT_L_00005/2.webp'],
            ['f', 'img/productos/ELECT_L_00005/3.jpg'],
            ['g', 'img/productos/ELECT_M_00006/1.webp'],
            ['h', 'img/productos/MUEBL_S_00007/1.webp'],
            ['i', 'img/productos/MUEBL_C_00008/1.jpg'],
            ['j', 'img/productos/MUEBL_MDC_00009/1.jpg'],
            ['k', 'img/productos/ROPA_RC_00010/1.webp'],
            ['l', 'img/productos/ROPA_RF_00011/1.webp'],
            ['m', 'img/productos/ROPA_RD_00012/1.webp'],
            ['n', 'img/productos/BELLZ_CDLP_00013/1.webp'],
            ['o', 'img/productos/BELLZ_M_00014/1.jpg'],
            ['p', 'img/productos/BELLZ_HP_00015/1.webp'],
        ];
        

        foreach ($images as $imageData) {
            $image = new Image();
            $image->public_id = $imageData[0];
            $image->route = $imageData[1];
            $image->save();
        }
    }
}
