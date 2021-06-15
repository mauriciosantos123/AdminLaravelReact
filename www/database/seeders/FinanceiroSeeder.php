<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinanceiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('financeiros')->updateOrInsert([

            'form_payment' => 'boleto',
            'value' => '120',
            'readjustment' => '5',
            'early_warning' => '',
            'termination' => '',
            'client_id' => '1',
            'end_fidelity' => '2016-04-10',
            'contract_start' => '2016-04-10',
            'contract_end' => '',
            'dt_payment' => '2016-04-10',
            'response_finance' => 'Marcelo',
            'tel_finance' => '00000000000',
            'email_finance' => 'masterclin@contact.com',
            'type_payment' => 'mensal',

        ]);
        DB::table('financeiros')->updateOrInsert([

            'form_payment' => 'boleto',
            'value' => '120',
            'readjustment' => '5',
            'early_warning' => '',
            'termination' => '',
            'client_id' => '2',
            'end_fidelity' => '2016-04-10',
            'contract_start' => '2016-04-10',
            'contract_end' => '',
            'dt_payment' => '2016-04-10',
            'response_finance' => 'Marcelo',
            'tel_finance' => '00000000000',
            'email_finance' => 'masterclin@contact.com',
            'type_payment' => 'anual',

        ]);
        DB::table('financeiros')->updateOrInsert([

            'form_payment' => 'boleto',
            'value' => '120',
            'readjustment' => '5',
            'early_warning' => '',
            'termination' => '',
            'client_id' => '3',
            'end_fidelity' => '2016-04-10',
            'contract_start' => '2016-04-10',
            'contract_end' => '',
            'dt_payment' => '2016-04-10',
            'response_finance' => 'Marcelo',
            'tel_finance' => '00000000000',
            'email_finance' => 'masterclin@contact.com',
            'type_payment' => 'isento',

        ]);
        DB::table('financeiros')->updateOrInsert([

            'form_payment' => 'boleto',
            'value' => '120',
            'readjustment' => '5',
            'early_warning' => '',
            'termination' => '',
            'client_id' => '4',
            'end_fidelity' => '2016-04-10',
            'contract_start' => '2016-04-10',
            'contract_end' => '',
            'dt_payment' => '2016-04-10',
            'response_finance' => 'Marcelo',
            'tel_finance' => '00000000000',
            'email_finance' => 'masterclin@contact.com',
            'type_payment' => 'mensal',

        ]);
        DB::table('financeiros')->updateOrInsert([

            'form_payment' => 'boleto',
            'value' => '120',
            'readjustment' => '5',
            'early_warning' => '',
            'termination' => '',
            'client_id' => '5',
            'end_fidelity' => '2016-04-10',
            'contract_start' => '2016-04-10',
            'contract_end' => '',
            'dt_payment' => '2016-04-10',
            'response_finance' => 'Marcelo',
            'tel_finance' => '00000000000',
            'email_finance' => 'masterclin@contact.com',
            'type_payment' => 'mensal',

        ]);
        DB::table('financeiros')->updateOrInsert([

            'form_payment' => 'boleto',
            'value' => '120',
            'readjustment' => '5',
            'early_warning' => '',
            'termination' => '',
            'client_id' => '6',
            'end_fidelity' => '2016-04-10',
            'contract_start' => '2016-04-10',
            'contract_end' => '',
            'dt_payment' => '2016-04-10',
            'response_finance' => 'Marcelo',
            'tel_finance' => '00000000000',
            'email_finance' => 'masterclin@contact.com',
            'type_payment' => 'mensal',

        ]);
        DB::table('financeiros')->updateOrInsert([

            'form_payment' => 'boleto',
            'value' => '120',
            'readjustment' => '5',
            'early_warning' => '',
            'termination' => '',
            'client_id' => '7',
            'end_fidelity' => '2016-04-10',
            'contract_start' => '2016-04-10',
            'contract_end' => '',
            'dt_payment' => '2016-04-10',
            'response_finance' => 'Marcelo',
            'tel_finance' => '00000000000',
            'email_finance' => 'masterclin@contact.com',
            'type_payment' => 'mensal',

        ]);
    }
}
