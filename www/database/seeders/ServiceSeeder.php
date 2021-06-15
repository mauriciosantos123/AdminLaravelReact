<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class serviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->updateOrInsert([
            'name_sevice' => 'Cadastro Cliente',
            'desc' => 'Não está Cadastrando ',
            'domain' => 'MasterClin',
            'domain_link' => 'masterclin.com.br',
            'client_id' => '1',
            'category_id' => '4',
        ]);
        DB::table('services')->updateOrInsert([
            'name_sevice' => 'Cadastro Cliente',
            'desc' => 'Não está Cadastrando ',
            'domain' => 'MasterClin',
            'domain_link' => 'masterclin.com.br',
            'client_id' => '2',
            'category_id' => '4',
        ]);
        DB::table('services')->updateOrInsert([
            'name_sevice' => 'Cadastro Cliente',
            'desc' => 'Não está Cadastrando ',
            'domain' => 'MasterClin',
            'domain_link' => 'masterclin.com.br',
            'client_id' => '3',
            'category_id' => '4',
        ]);
        DB::table('services')->updateOrInsert([
            'name_sevice' => 'Cadastro Cliente',
            'desc' => 'Não está Cadastrando ',
            'domain' => 'MasterClin',
            'domain_link' => 'masterclin.com.br',
            'client_id' => '4',
            'category_id' => '4',
        ]);
        DB::table('services')->updateOrInsert([
            'name_sevice' => 'Cadastro Cliente',
            'desc' => 'Não está Cadastrando ',
            'domain' => 'MasterClin',
            'domain_link' => 'masterclin.com.br',
            'client_id' => '5',
            'category_id' => '4',
        ]);
        DB::table('services')->updateOrInsert([
            'name_sevice' => 'Cadastro Cliente',
            'desc' => 'Não está Cadastrando ',
            'domain' => 'MasterClin',
            'domain_link' => 'masterclin.com.br',
            'client_id' => '6',
            'category_id' => '4',
        ]);
        DB::table('services')->updateOrInsert([
            'name_sevice' => 'Cadastro Cliente',
            'desc' => 'Não está Cadastrando ',
            'domain' => 'MasterClin',
            'domain_link' => 'masterclin.com.br',
            'client_id' => '7',
            'category_id' => '4',
        ]);

    }
}
