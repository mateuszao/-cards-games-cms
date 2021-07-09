<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InicioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('home')->insert([
            'titulo' => 'TRANSISTOR - RED THE SINGER',
            'descricao' => '"Olha, o que quer que você esteja pensando, me faça um favor, não solte."',
            'foto' => 'InicioFoto/RSlb7KmUNtDQHFBgVGux7sbKltg6GSCsqzzrfgv5.png'
        ]);
    }
}
