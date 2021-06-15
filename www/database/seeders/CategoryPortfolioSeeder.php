<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryPortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('category_portfolios')->updateOrInsert([
            'name' => 'Comércio',
        ]);
        DB::table('category_portfolios')->updateOrInsert([
            'name' => 'Serviços',
        ]);
        DB::table('category_portfolios')->updateOrInsert([
            'name' => 'Instituições',
        ]);
    }
}
