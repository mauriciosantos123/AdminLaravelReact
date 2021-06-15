<?php

namespace App\Http\Controllers;

use App\Models\CategoryOrderPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryOrderPaymentController extends Controller
{
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
        $listCategory = CategoryOrderPayment::get();
        $data['listCateg'] = $listCategory;

        return view('categoryOrder.index',$data);

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
        CategoryOrderPayment::create($this->process_form($request));

        $request->session()->flash('mensage', 'Cadastrado com sucesso');
        Session::flash('message', 'Cadastrado com Sucesso!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->to('categoryOrderPayment');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryOrderPayment  $CategoryOrderPayment
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryOrderPayment $CategoryOrderPayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryOrderPayment  $CategoryOrderPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryOrderPayment $CategoryOrderPayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryOrderPayment  $CategoryOrderPayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryOrderPayment $CategoryOrderPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryOrderPayment  $CategoryOrderPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryOrderPayment $CategoryOrderPayment)
    {
        //
    }
}
