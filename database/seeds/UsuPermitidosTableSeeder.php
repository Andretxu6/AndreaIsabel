<?php

use Illuminate\Database\Seeder;

class UsuPermitidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('usu_permitidos')->insert([
            'nombre' => 'usuario',
            'permiso' => false,
        ]);

        DB::table('usu_permitidos')->insert([
            'nombre' => 'usuario extra',
            'permiso' => true,
        ]);
    }
}
