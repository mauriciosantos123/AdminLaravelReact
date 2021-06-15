<?php

namespace App\Http\Controllers;

use App\Models\CategoryPortfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryPortfolioController extends Controller
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
        $listCategory = CategoryPortfolio::get();
        $data['listCateg'] = $listCategory;

        return view('categoryPortfolio.index',$data);

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
        CategoryPortfolio::create($this->process_form($request));

        $request->session()->flash('mensage', 'Cadastrado com sucesso');
        Session::flash('message', 'Cadastrado com Sucesso!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->to('categoryPortfolio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryPortfolio  $CategoryPortfolio
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryPortfolio $CategoryPortfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryPortfolio  $CategoryPortfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryPortfolio $CategoryPortfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryPortfolio  $CategoryPortfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryPortfolio $CategoryPortfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryPortfolio  $CategoryPortfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryPortfolio $CategoryPortfolio)
    {
        //
    }
}
