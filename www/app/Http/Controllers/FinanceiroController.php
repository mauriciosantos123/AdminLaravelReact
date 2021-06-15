<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Financeiro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Throwable;

class FinanceiroController extends Controller
{
    //
    public function process_form(Request $request)
    {
        # code...
        $data = array();
        $data['contract_start'] = $request->contract_start; //inicio contrato
        $data['contract_end'] = $request->contract_end; //fim contrato
        $data['dt_payment'] = $request->dt_payment; //data de pagamento 
        $data['form_payment'] = $request->form_payment; //forma de pagamento 
        $data['type_payment'] = $request->type_payment; //forma de pagamento 
        $data['value'] = $request->value; //valor
        $data['readjustment'] = $request->readjustment; //reajuste
        $data['end_fidelity'] = $request->end_fidelity; // termino de fedelidade 
        $data['early_warning'] = $request->early_warning; //aviso previo
        $data['termination'] = $request->termination; //recisao 
        $data['id_financeiro'] = $request->id_Financeiro;
        $data['client_id'] = $request->client_id;

        return $data;
    }

    public function index()
    {
        //pegar o dados com a model 
        $listFinanceiro = Financeiro::get();
        // lista oq tem salvo no banco 
        $data['listFinanceiro'] = $listFinanceiro;

        $client = Client::all()->last()->id;
        $data['last'] = $client;

        return view('financeiro.index', $data);
    }

    public function create()
    {
        //pegar o dados com a model 
        $listFinanceiro = Financeiro::get();
        // lista oq tem salvo no banco 
        $data['listFinanceiro'] = $listFinanceiro;

        $client = Client::all()->last()->id;
        $data['last'] = $client;


        return view('financeiro.create', $data);
    }

    public function store(Request $request)
    {
        // /criar contato novo pelo banco 
        //  passo2

        Financeiro::create($this->process_form($request));




        $request->session()->flash('mensage', 'Cadastrado com sucesso');

        return redirect()->to('service');
    }



    public function show(Request $request, $id)
    {
        $registro = Financeiro::findOrFail($id);
        $data['registro'] = $registro;

        return view('Financeiro.edit', $data);
    }

    public function edit($id)
    {
        try {
            //pegar o id 
            $data = array();
            $data['id'] = $id;
            $reg = Financeiro::findOrFail($id);
            //reg = registro
            $data['reg'] = $reg;
            return view('financeiro.edit', $data);
        } catch (Throwable $e) {
            report($e);
            $client = Client::findOrFail($id)->id;
            $data['last'] = $client;
            return view('financeiro.create', $data);
        }
    }

    public function update(Request $request, $id)
    {
        $reg = Financeiro::findOrFail($id);
        //atualizar o banco de dados 
        $reg->update($this->process_form($request));

        $request->session()->flush('alert', 'Editado com sucesso ');
        Session::flash('message', 'Editado com sucesso !');
        Session::flash('alert-class', 'alert-success');
        return redirect()->to('client');
    }

    public function destroy(Request $request, $id)
    {
        Financeiro::where("id", $id)->delete();

        $request->session()->flash('mensage', 'Deletado com sucesso');
        Session::flash('message', 'Deletado com Sucesso!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->to('financeiro');
    }

    public function read(Request $request, $id)
    {

        try {
            # code...
            $data = array();
            $data['id'] = $id;
            $reg = Financeiro::findOrFail($id);
            //reg = registro
            $data['reg'] = $reg;
            return view('financeiro.show', $data);
        } catch (Throwable $e) {
            report($e);
            $client = Client::findOrFail($id)->id;
            $data['last'] = $client;
            return view('financeiro.create', $data);
        }
    }
}
