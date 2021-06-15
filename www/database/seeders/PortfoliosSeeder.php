<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfoliosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portifolios')->updateOrInsert([

            'name' => 'Cartão MarterClin Vantagens',
            'category_id' => '2',
            'client_id' => '1',
            'desc' => 'É um cartão de vantagens que proporciona economia direta ao usuário no momento da aquisição de produtos ou serviços.',
            'date_portifolio' => '2016-04-10',
            'url' => 'https://cartaomasterclin.com.br/',
            'logo' => '/images/client/masterclinlogo.png',
            'img' => '/images/masteclin.png',
            'destaque' => '1',
        ]);
        DB::table('portifolios')->updateOrInsert([

            'name' => 'Alugui',
            'category_id' => '2',
            'client_id' => '2',
            'desc' => 'A alugui é uma empresa especializada em alugueis.',
            'date_portifolio' => '2018-01-25',
            'url' => 'http://www.alugui.com.br/',
            'logo' => '/images/client/aluguilogo.png',
            'img' => '/images/alugui.png',
            'destaque' => '1',
        ]);
        DB::table('portifolios')->updateOrInsert([

            'name' => 'Serramiro Lanchonete',
            'category_id' => '2',
            'client_id' => '3',
            'desc' => 'Morador de Guararema, plantador de pêssego, sábio, pedreiro, adorador do simples com qualidade, pai exemplar, marido da Dona Dide, avô parceiro.',
            'date_portifolio' => '2016-04-10',
            'url' => 'https://serramiro.com.br/',
            'logo' => '/images/client/serramirologo.png',
            'img' => '/images/serramiro.png',
            'destaque' => '1',
        ]);
        DB::table('portifolios')->updateOrInsert([

            'name' => 'Elvanira Ateliê',
            'category_id' => '2',
            'client_id' => '4',
            'desc' => 'Loja de acessorios para festas.',
            'date_portifolio' => '2016-04-10',
            'url' => 'https://elvanira.com.br/home',
            'logo' => '/images/client/logoElvanira.png',
            'img' => '/images/erivania.png',
            'destaque' => '1',
        ]);
        DB::table('portifolios')->updateOrInsert([

            'name' => 'MSRodrigues',
            'category_id' => '2',
            'client_id' => '5',
            'desc' => 'Serviços de advocacias.',
            'date_portifolio' => '2016-04-10',
            'url' => 'https://msrodrigues.adv.br/home',
            'logo' => '/images/client/logoMsRodrigues.png',
            'img' => '/images/capaSite/capaRS.jpeg',
            'destaque' => '1',
        ]);
        DB::table('portifolios')->updateOrInsert([

            'name' => 'USE Descontos',
            'category_id' => '2',
            'client_id' => '6',
            'desc' => 'USE desconto a plataforma de descontos para você.',
            'date_portifolio' => '2016-04-10',
            'url' => 'https://usedesconto.com.br/home',
            'logo' => '/images/client/use.jpeg',
            'img' => '/images/portfolio/use.jpeg',
            'destaque' => '1',
        ]);
        DB::table('portifolios')->updateOrInsert([

            'name' => 'Berço da Cidadania',
            'category_id' => '2',
            'client_id' => '7',
            'desc' => 'O INSTITUTO DE CAPACITAÇÃO E INTERVENÇÃO PSICOSSOCIAL PELOS DIREITOS DA CRIANÇA E ADOLESCENTE EM SITUAÇÃO DE RISCO.',
            'date_portifolio' => '2016-04-10',
            'url' => 'https://bercodacidadania.ong.br/home',
            'logo' => '/images/client/LogoBerco.png',
            'img' => '/images/capaSite/capaBerco.png',
            'destaque' => '1',
        ]);
    }
}
