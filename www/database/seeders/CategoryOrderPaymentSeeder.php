<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryOrderPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //category_order_payments
        DB::table('category_order_payments')->updateOrInsert([
            'name' => 'Dentro do plano',
        ]);
        DB::table('category_order_payments')->updateOrInsert([
            'name' => 'Valor extra',
        ]);
        DB::table('category_order_payments')->updateOrInsert([
            'name' => 'Avulso',
        ]);
    }
}
