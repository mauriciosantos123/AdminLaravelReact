<?php

namespace App\Http\Controllers;

use App\Models\CategoryPortfolio;
use App\Models\Portifolio;
use App\Models\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Throwable;

class PortifolioController extends Controller
{

    public function process_form(Request $request)
    {
        //fazer o banco e definir a chamada

        $data = array();

        $data['destaque'] = 0;

        if ($request->destaque == "on") {
            $data['destaque'] = 1;
        }

        $data['name'] = $request->name;
        $data['category_id'] = $request->category_id;
        $data['client_id'] = $request->client_id;
        $data['desc'] = $request->desc;
        $data['date_portifolio'] = $request->date_portifolio;
        $data['url'] = $request->url;
        if ($request->hasFile('img')) {

            $imageName = uniqid('portfolio_') . '.' . $request->img->extension();
            $request->img->move(public_path('images'), $imageName);
            $data['img'] = '/images/' . $imageName;
        }


        if ($request->hasFile('logo')) {

            $imageName = uniqid('logo_') . '.' . $request->logo->extension();
            $request->logo->move(public_path('images/logos'), $imageName);
            $data['logo'] = '/images/logos/' . $imageName;
        }
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
        $listPorti = Portifolio::get();
        // lista oq tem salvo no banco 
        $data['listPorti'] = $listPorti;


        return view('portifolio.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //pegar o dados com a model 
        $listPorti = Portifolio::get();


        $listCategory = CategoryPortfolio::get();
        $data['listCategory'] = $listCategory;

        $client = Client::all()->last()->id; //Pegar Ultimo Id cadastrado do cliente
        $data['last'] = $client;

        return view('portifolio.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // /criar contato novo pelo banco 


        // passo4
        Portifolio::create($this->process_form($request));
        $request->session()->flash('mensage', 'Cadastrado com sucesso');
        Session::flash('message', 'Cadastrado com sucesso!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->to('client');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portifolio  $portifolio
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $registro = Portifolio::findOrFail($id);
        $data['registro'] = $registro;

        return view('portifolio.edit', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portifolio  $portifolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //pegar o id 
        $data = array();

        $data['id'] = $id;
        $reg = Portifolio::findOrFail($id);

        $listCategory = CategoryPortfolio::get();
        $data['listCategory'] = $listCategory;
        //reg = registro
        $data['reg'] = $reg;
        
        return view('portifolio.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portifolio  $portifolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reg = Portifolio::findOrFail($id);
        //atualizar o banco de dados 
        $reg->update($this->process_form($request));

        $request->session()->flush('alert', 'Editado com sucesso ');
        Session::flash('message', 'Editado com sucesso !');
        Session::flash('alert-class', 'alert-success');
        return redirect()->to('client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portifolio  $portifolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Portifolio::where("id", $id)->delete();

        $request->session()->flash('mensage', 'Deletado com sucesso');
        Session::flash('message', 'Deletado com Sucesso!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->to('portifolio');
    }
    public function read(Request $request, $id)
    {
        try{
        # code...
        $data = array();
        $listCategory = CategoryPortfolio::get();
        $data['listCategory'] = $listCategory;
        $data['id'] = $id;
        $reg = Portifolio::findOrFail($id);
        //reg = registro
        $data['reg'] = $reg;
        return view('portifolio.show', $data);

    } catch(Throwable $e){
        report($e);
        
        $listCategory = CategoryPortfolio::get();
        $data['listCategory'] = $listCategory;
        $client = Client::findOrFail($id)->id;
        $data['last'] = $client;
        return view('portifolio.create', $data);
    }
    }
}
