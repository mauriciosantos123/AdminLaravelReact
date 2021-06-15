<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryserviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('category_services')->updateOrInsert([

            'name'=>'Site',
        ]);
        DB::table('category_services')->updateOrInsert([

            'name'=>'Envio automático de e-mails',
        ]);
        DB::table('category_services')->updateOrInsert([

            'name'=>'Painel de controle do site',
        ]);
        DB::table('category_services')->updateOrInsert([

            'name'=>'Formulário de cadastro',
        ]);
        DB::table('category_services')->updateOrInsert([

            'name'=>'Controle administrativo de clientes',
        ]);
        DB::table('category_services')->updateOrInsert([

            'name'=>'Controle financeiro',
        ]);
        DB::table('category_services')->updateOrInsert([

            'name'=>'Controle de produtos',
        ]);
    }
}
