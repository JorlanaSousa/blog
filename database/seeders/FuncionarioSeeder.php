<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('funcionarios')->insert([
            'nome' => 'João',
       
        ]);

        DB::table('funcionarios')->insert([
            'nome' => 'Jojos',
       
        ]);

        DB::table('funcionarios')->insert([
            'nome' => 'Bhenrique',
       
        ]);
            


    }
}
