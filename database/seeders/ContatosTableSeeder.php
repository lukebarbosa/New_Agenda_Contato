<?php

namespace Database\Seeders;

use App\Models\Contato;
use Illuminate\Database\Seeder;

class ContatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Contato::factory(10)->create();
        // \App\Models\Contato::factory()->count(10)->create();
    }
}
