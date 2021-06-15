<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\ClientResponsible;
use App\Models\Portifolio;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Database\Eloquent\SupportsPartialRelations;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    //

    public function process_form(Request $request)
    {
        $data = array();

        // $data['active'] = 0;

        // if ($request->active == "on") {
        //     $data['active'] = '1';
        // }

        $data['active'] = 0;

        if ($request->active == "") {
            $data['active'] = '0';
        } else {
            $data['active'] = '1';
        }
        $data['name_fantasy'] = $request->name_fantasy; 
        $request->name_fantasy = $request->validate([ 'name_fantasy' => 'required','string']);//nome fantasia
        $data['company_name'] = $request->company_name; // razao social 
        $request->company_name = $request->validate([ 'company_name' => 'required','string']);

        $data['cnpj'] = $request->cnpj;
        $request->cnpj = $request->validate([ 'cnpj' => 'required','string','uniqid']);
        $data['state_register'] = $request->state_register; //inscrição estadual 
        $request->state_register = $request->validate([ 'state_register' => 'required','string']);

        $data['city'] = $request->city; //cidade
        $data['state'] = $request->state; //estado

        $data['tel'] = $request->tel;
        $request->tel = $request->validate([ 'tel' => 'required','string']);

        $data['response_contact'] = $request->response_contact;
        $request->response_contact = $request->validate([ 'response_contact' => 'required','string']);

        $data['tel_response'] = $request->tel_response;
        $request->tel_response = $request->validate([ 'tel_response' => 'required','string']);

        $data['email_response'] = $request->email_response;
        $request->email_response = $request->validate([ 'email_response' => 'required','string']);

        $data['email'] = $request->email;
        $request->email = $request->validate([ 'email' => 'required','string']);

        

        return $data;
    }
    // VALIDAR COMPO NA TELA CLIENTE CHECKBOX
    public function process_active(Request $request)
    {
        $data = array();

        $data['active'] = 0;

        if ($request->active == "") {
            $data['active'] = '0';
        } else {
            $data['active'] = '1';
        }
        return $data;
    }


    public function index()
    {
        //pegar o dados com a model 
        $listClient = Client::get();
        $data['listClient'] = $listClient;

        $listPortfolio = Portifolio::get();
        $data['listPortfolio'] = $listPortfolio;
        // lista oq tem salvo no banco 





        return view('client.index', $data);
    }

    public function create()
    {
        //pegar o dados com a model 
        $listClient = Client::get();

        $data['listClient'] = $listClient;

        return view('client.create', $data);
    }

    public function store(Request $request)
    {
        // /criar contato novo pelo banco 
        //  passo1 

        
        Client::create($this->process_form($request));



        $request->session()->flash('mensage', 'Cadastrado com sucesso');

        return redirect()->to('financeiro/create');
    }



    public function show(Request $request, $id)
    {
        $reg = Client::findOrFail($id);
        $data['reg'] = $reg;
        $reg->update($request->$data['active']);
        return view('client.edit', $data);
    }

    public function edit($id)
    {
        //pegar o id 
   
        $data['id'] = $id;
        $reg = Client::findOrFail($id);
        //reg = registro
        $data['reg'] = $reg;
        return view('client.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $reg = Client::findOrFail($id);
        $reg->update($request->all());
        //atualizar o banco de dados 
        $reg->update($this->process_form($request));

        $request->session()->flush('alert', 'Editado com sucesso ');
        Session::flash('message', 'Editado com sucesso !');
        Session::flash('alert-class', 'alert-success');
        return redirect()->to('client');
    }

    public function destroy(Request $request, $id)
    {
        Client::where("id", $id)->delete();

        $request->session()->flash('mensage', 'Deletado com sucesso');
        Session::flash('message', 'Deletado com Sucesso!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->to('client');
    }


    public function read(Request $request, $id)
    {
        # code...
        $data = array();
        $data['id'] = $id;
        $reg = Client::findOrFail($id);
        //reg = registro
        $data['reg'] = $reg;
        return view('client.show', $data);
    }

// FUNÇÃO DE ATIVA NA TELA CLIENTE CHECKBOX

    public function activation(Request $request, $id)
    {
        $reg = Client::findOrFail($id);
        $reg->update($request->all());
        //atualizar o banco de dados 
        $reg->update($this->process_active($request));
        $request->session();

        Session::flash('message', 'Alterado com sucesso !');
        Session::flash('alert-class', 'alert-success');
        
        return redirect()->to('client');
    }
}
