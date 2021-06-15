<?php

namespace App\Http\Controllers;

use App\Models\bugget;
use Illuminate\Http\Request;

class BuggetController extends Controller
{

    public function process_form(Request $request)
    {
        $data = array();
        $data['client_id'] = $request->client_id;
        $data['desc'] = $request->desc;


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bugget  $bugget
     * @return \Illuminate\Http\Response
     */
    public function show(bugget $bugget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bugget  $bugget
     * @return \Illuminate\Http\Response
     */
    public function edit(bugget $bugget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bugget  $bugget
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bugget $bugget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bugget  $bugget
     * @return \Illuminate\Http\Response
     */
    public function destroy(bugget $bugget)
    {
        //
    }
}
