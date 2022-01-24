<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Seeder;

class GeneroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genero = [
            'Terror',
            'Ação',
            'Comédia'
        ];
        foreach($genero as $key => $value){
            Genero::create([
                'nome' => $value,
                'is_active' => true
            ]);
        }
    }
}
