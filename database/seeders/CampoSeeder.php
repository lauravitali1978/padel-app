<?php

namespace Database\Seeders;

use App\Models\Campo;
use Illuminate\Database\Seeder;

class CampoSeeder extends Seeder
{
    public function run()
    {
        $nomi = ['Campo Nord', 'Campo Sud', 'Campo Est', 'Campo Ovest', 'Campo Centrale', 'Campo Coperto'];

        foreach ($nomi as $i => $nome) {
            Campo::create([
                'nome' => $nome,
                'foto' => "campi/campo{$i}.jpg", // es: storage/app/public/campi/campo0.jpg
            ]);
        }
    }
}

