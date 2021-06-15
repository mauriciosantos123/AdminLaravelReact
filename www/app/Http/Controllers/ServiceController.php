<?php

namespace App\Http\Controllers;

use App\Models\Categoryservice;
use App\Models\Client;
use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Throwable;

class ServiceController extends Controller
{


    public function process_form(Request $request)
    {
        # code...
        $data = array();
        $data['name_sevice'] = $request->name_sevice;
        $data['desc'] = $request->desc;
        $data['domain'] = $request->domain;
        $data['domain_link'] = $request->domain_link;
        $data['category_id'] = $request->contract_service; //serviços contratados
        $data['client_id'] = $request->client_id;


        return $data;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //pegar o dados com a model 
        $listService = service::get();
        // lista oq tem salvo no banco 
        $data['listService'] = $listService;

        $listCategory = Categoryservice::get();
        $data['listCategory'] = $listCategory;

        $client = Client::all()->last()->id; //Pegar Ultimo Id cadastrado do cliente
        $data['last'] = $client;


        return view('service.index', $data);
    }

    public function create()
    {
        //pegar o dados com a model 
        $listService = service::get();

        // lista oq tem salvo no banco 
        $data['listService'] = $listService;
        return view('service.create', $data);
    }

    public function store(Request $request)
    {
        // Passo3
        service::create($this->process_form($request));
        $request->session()->flash('mensage', 'Cadastrado com sucesso');

        return redirect()->to('portifolio/create');
    }



    public function show(Request $request, $id)
    {
        $registro = service::findOrFail($id);
        $data['registro'] = $registro;

        return view('service.edit', $data);
    }

    public function edit($id)
    {
        try {
            //pegar o id 
            $data = array();
            $data['id'] = $id;
            $listCategory = Categoryservice::get();
            $data['listCategory'] = $listCategory;
            $reg = service::findOrFail($id);
            //reg = registro
            $data['reg'] = $reg;
            return view('service.edit', $data);
        } catch (Throwable $e) {
            report($e);

            $listCategory = Categoryservice::get();
            $data['listCategory'] = $listCategory;
            $client = Client::findOrFail($id)->id;
            $data['last'] = $client;
            return view('service.index', $data);
        }
    }

    public function update(Request $request, $id)
    {
        $reg = service::findOrFail($id);
        //atualizar o banco de dados 
        $reg->update($this->process_form($request));

        $request->session()->flush('alert', 'Editado com sucesso ');
        Session::flash('message', 'Editado com sucesso !');
        Session::flash('alert-class', 'alert-success');
        return redirect()->to('client');
    }

    public function destroy(Request $request, $id)
    {
        service::where("id", $id)->delete();

        $request->session()->flash('mensage', 'Deletado com sucesso');
        Session::flash('message', 'Deletado com Sucesso!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->to('client');
    }
    public function read(Request $request, $id)
    {
        try {
            # code...
            $data = array();
            $data['id'] = $id;
            $reg = service::findOrFail($id);
            $listCategory = Categoryservice::get();
            $data['listCategory'] = $listCategory;
            //reg = registro
            $data['reg'] = $reg;
            return view('service.show', $data);
        } catch (Throwable $e) {
            report($e);

            $listCategory = Categoryservice::get();
            $data['listCategory'] = $listCategory;
            $client = Client::findOrFail($id)->id;
            $data['last'] = $client;
            return view('service.index', $data);
        }
    }
}
