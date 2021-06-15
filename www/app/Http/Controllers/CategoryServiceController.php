<?php

namespace App\Http\Controllers;

use App\Models\Categoryservice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryServiceController extends Controller
{
    //
    public function process_form(Request $request)
    {
        $data = array();
      
        $data['name'] = $request->name; //nome fantasia


        return $data;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $listCategory = Categoryservice::get();
        $data['listCateg'] = $listCategory;


        return view('categoryService.index',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Categoryservice::create($this->process_form($request));

        $request->session()->flash('mensage', 'Cadastrado com sucesso');
        Session::flash('message', 'Cadastrado com Sucesso!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->to('categoryService');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoryservice  $Categoryservice
     * @return \Illuminate\Http\Response
     */
    public function show(Categoryservice $Categoryservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoryservice  $Categoryservice
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoryservice $Categoryservice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoryservice  $Categoryservice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoryservice $Categoryservice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoryservice  $Categoryservice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoryservice $Categoryservice)
    {
        //
    }
}
