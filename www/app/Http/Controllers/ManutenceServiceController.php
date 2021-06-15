<?php

namespace App\Http\Controllers;

use App\Models\CategoryOrderPayment;
use App\Models\Categoryservice;
use App\Models\Client;
use App\Models\Manutence_service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PDF;

class ManutenceServiceController extends Controller
{
    //
    public function process_form(Request $request)
    {
        $data = array();

        $data['approved'] = 0;

        if ($request->approved == "on") {
            $data['approved'] = 1;
        }

        $data['order_service'] = $request->order_service; //nome fantasia
        $data['type_service'] = $request->type_service; // razao social 
        $data['extra_value'] = $request->extra_value;
        $data['completion_time'] = $request->completion_time; //inscrição estadual 
        $data['dt_start'] = $request->dt_start; //cidade
        $data['dt_finish'] = $request->dt_finish; //estado
        $data['client_id'] = $request->client_id;
        $data['service_id'] = $request->service_id;
        $data['categorypayments_id'] = $request->categorypayments_id;


        return $data;
    }

    public function index()
    {
        //pegar o dados com a model 
        $listmanutenceService = Manutence_service::get();
        $data['listmanutenceService'] = $listmanutenceService;
        
        $listcategory = Categoryservice::get();
        $data['listcategory'] = $listcategory;
        // lista oq tem salvo no banco 
        




        return view('manutenceService.index', $data);
    }

    public function create()
    {
        //pegar o dados com a model
        $listClinet = Client::get(); 
        $listmanutenceService = Manutence_service::get();
        $listcategory = Categoryservice::get();
        $data['listcategory'] = $listcategory;
        $data['listmanutenceService'] = $listmanutenceService;
        $data['listClinet'] = $listClinet;

        $listPaymCategory = CategoryOrderPayment::get();
        $data['listPaymCategory'] = $listPaymCategory;

        return view('manutenceService.create', $data);
    }

    public function store(Request $request)
    {
        // /criar contato novo pelo banco 
        //  passo1 

        Manutence_service::create($this->process_form($request));



        $request->session()->flash('mensage', 'Cadastrado com sucesso');

        return redirect()->to('manutenceService');
    }



    public function show(Request $request, $id)
    {
        $reg = Manutence_service::findOrFail($id);
        $data['reg'] = $reg;

        return view('manutenceService.edit', $data);
    }

    public function edit($id)
    {
        //pegar o id 
        $data = array();
        $listcategory = Categoryservice::get();
        $data['listcategory'] = $listcategory;
        $listClinet = Client::get(); 
        $data['listClinet'] = $listClinet;
        $data['id'] = $id;
        $reg = Manutence_service::findOrFail($id);
        $listPaymCategory = CategoryOrderPayment::get();
        $data['listPaymCategory'] = $listPaymCategory;
        //reg = registro
        $data['reg'] = $reg;

        
        return view('manutenceService.edit', $data);

    }

    public function update(Request $request, $id)
    {
        $reg = Manutence_service::findOrFail($id);
        //atualizar o banco de dados 
        $reg->update($this->process_form($request));

        $request->session()->flush('alert', 'Editado com sucesso ');
        Session::flash('message', 'Editado com sucesso !');
        Session::flash('alert-class', 'alert-success');
        return redirect()->to('manutenceService');
    }

    public function destroy(Request $request, $id)
    {
        Manutence_service::where("id", $id)->delete();

        $request->session()->flash('mensage', 'Deletado com sucesso');
        Session::flash('message', 'Deletado com Sucesso!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->to('manutenceService');
    }


    public function read(Request $request, $id)
    {
        # code...
        $data = array();
        $data['id'] = $id;
        $reg = Manutence_service::findOrFail($id);
        //reg = registro
        $data['reg'] = $reg;
        return view('manutenceService.show', $data);
    }
    
}
