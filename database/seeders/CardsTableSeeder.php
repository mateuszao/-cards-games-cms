<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cards')->insert([
            'titulo' => 'Primeiro Card',
            'descricao' => 'A Camerata foi apenas os dois no início, e suas fileiras nunca foram destinadas a exceder um número a ser contado em uma mão.',
            'foto' => 'InicioFoto/QFnzSGv6EZDUPV85Sg0adL4shtPHVnVPxMzpUTc3.png'
        ]);

        \DB::table('cards')->insert([
            'titulo' => 'Segundo Card',
            'descricao' => 'Red, uma jovem cantora, entrou em posse do Transistor. Sendo a poderosa espada falante. O grupo Possessores quer tanto ela quanto o Transistor e está perseguindo implacavelmente a sua procura.',
            'foto' => 'InicioFoto/aQtPPuASyoBbeqwMNxL2XlxK6NSjQQIA0FwKeFvX.png'
        ]);

        \DB::table('cards')->insert([
            'titulo' => 'Terceiro Card',
            'descricao' => 'Sybil é descrita pelo Transistor como sendo os "olhos e ouvidos" da Camerata.',
            'foto' => 'InicioFoto/uYe7Zpcabwei2miRywx2IaHN9ITnUTaRRu7yR3b0.png'
        ]);

    }
}
