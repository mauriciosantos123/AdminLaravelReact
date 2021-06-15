<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clients')->updateOrInsert([


            'name_fantasy' => 'MasterClin',
            'company_name' => 'Catão MasterClin',
            'cnpj' => '00000000000007',
            'state_register' => '000',
            'city' => 'Brasilia',
            'state' => 'Destrito Federal',
            'email' => 'masterclin@contact.com',
            'tel' => '00000000000',
            'response_contact' => 'Marcelo',
            'tel_response' => '00000000000',
            'email_response' => 'masterclin@contact.com',
            'active' => '1',

        ]);

        DB::table('clients')->updateOrInsert([


            'name_fantasy' => 'Alugui',
            'company_name' => 'Alugui',
            'cnpj' => '00000000000006',
            'state_register' => '000',
            'city' => 'Brasilia',
            'state' => 'Destrito Federal',
            'tel' => '00000000000',
            'email' => 'Alugui@contact.com',
            'response_contact' => 'Marcelo',
            'tel_response' => '00000000000',
            'email_response' => 'masterclin@contact.com',
            'active' => '1',
        ]);
        DB::table('clients')->updateOrInsert([


            'name_fantasy' => 'Serramiro Lanchonete',
            'company_name' => 'Serramiro Lanchonete',
            'cnpj' => '00000000000005',
            'state_register' => '000',
            'city' => 'Brasilia',
            'state' => 'Destrito Federal',
            'tel' => '00000000000',
            'email' => 'SerramiroLanchonete@contact.com',
            'response_contact' => 'Marcelo',
            'tel_response' => '00000000000',
            'email_response' => 'masterclin@contact.com',
            'active' => '1',
        ]);
        DB::table('clients')->updateOrInsert([


            'name_fantasy' => 'Elvanira Ateliê',
            'company_name' => 'Elvanira Ateliê',
            'cnpj' => '00000000000001',
            'state_register' => '000',
            'city' => 'Brasilia',
            'state' => 'Destrito Federal',
            'tel' => '00000000000',
            'email' => 'ElvaniraAteliê@contact.com',
            'response_contact' => 'Marcelo',
            'tel_response' => '00000000000',
            'email_response' => 'masterclin@contact.com',
            'active' => '1',
        ]);
        DB::table('clients')->updateOrInsert([


            'name_fantasy' => 'MSRodrigues',
            'company_name' => 'MSRodrigues',
            'cnpj' => '00000000000002',
            'state_register' => '000',
            'city' => 'Brasilia',
            'state' => 'Destrito Federal',
            'tel' => '00000000000',
            'email' => 'MSRodrigues@contact.com',
            'response_contact' => 'Marcelo',
            'tel_response' => '00000000000',
            'email_response' => 'masterclin@contact.com',
            'active' => '1',
        ]);
        DB::table('clients')->updateOrInsert([


            'name_fantasy' => 'USE Descontos',
            'company_name' => 'USE Descontos',
            'cnpj' => '00000000000003',
            'state_register' => '000',
            'city' => 'Brasilia',
            'state' => 'Destrito Federal',
            'tel' => '00000000000',
            'email' => 'USEDescontos@contact.com',
            'response_contact' => 'Marcelo',
            'tel_response' => '00000000000',
            'email_response' => 'masterclin@contact.com',
            'active' => '1',
        ]);
        DB::table('clients')->updateOrInsert([


            'name_fantasy' => 'Berço da Cidadania',
            'company_name' => 'Berço da Cidadania',
            'cnpj' => '00000000000004',
            'state_register' => '000',
            'city' => 'Brasilia',
            'state' => 'Destrito Federal',
            'tel' => '00000000000',
            'email' => 'BercodaCidadania@contact.com',
            'response_contact' => 'Marcelo',
            'tel_response' => '00000000000',
            'email_response' => 'masterclin@contact.com',
            'active' => '1',
        ]);
    }
}
