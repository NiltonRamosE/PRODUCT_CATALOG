<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Administrator;

class AdministratorSeeder extends Seeder
{
    public function run(): void
    {
        $administrators = [
            ['NILTON', 'RAMOS', 'ENCARNACION', 'MASCULINO', 'NRAMOSE@klimacity.com', 'devaccount', NULL, NULL],
            ['GEANELA CRISTINA', 'RAMOS', 'ENCARNACION', 'FEMENINO', 'GCRAMOSE@klimacity.com', 'masterAccountKLC_96', NULL, NULL],
        ];

        foreach ($administrators as $administratorData) {
            $administrator = new Administrator();
            $administrator->name = $administratorData[0];
            $administrator->paternal_surname = $administratorData[1];
            $administrator->maternal_surname = $administratorData[2];
            $administrator->gender = $administratorData[3];
            $administrator->work_email = $administratorData[4];
            $administrator->password = $administratorData[5];
            $administrator->recovery_email = $administratorData[6];
            $administrator->image_admin = $administratorData[7];
            $administrator->save();
        }
    }
}
