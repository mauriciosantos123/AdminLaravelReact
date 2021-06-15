<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{

    public function process_form(Request $request)
    {
        //fazer o banco e definir a chamada
        $data = array();
        $data['name'] = $request->name;
        $data['email']= $request->email;
        $data['title'] = $request->title;
        $data['phone'] = $request->phone;
        $data['msg'] = $request->msg;
        return $data;

    }    




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //pegar os dados da model 
        $listContact = Contact::get();
        //fazer o array pra trazer as informaçoes do banco 
        $data['liscContact']= $listContact;
        //retorna a view 
        return view ('contact.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //pegar os dados da model 
        $listContact = Contact::get();
        //fazer o array pra trazer as informaçoes do banco 
        $data['liscContact']= $listContact;
        //retorna a view 
        
        return view('contact.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //achar o banco e  atribuir valores 
        Contact::create($this->process_form($request));
        //menssagem de sucesso 
        $request->session()->flush('mensage','Cadastrado com sucesso');


        return redirect()->to('contact');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $registro = Contact::findOrFail($id);
        $data['registro'] = $registro;

        return view ('contact.edit',$data);



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $data = array();
        $data['id']= $id;
        $reg = Contact::findOrFail($id); 

        $data['reg']=$reg;
        return view ('contact.edit',$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //acha o id pela Model
        $reg = Contact::findOrFail($id);
        //faz o update pela model e banco
        $reg->update($this->process_form($request));
        //menssagem de sucesso 
        $request->Session()->flash('mensage','Editado com sucesso');
        Session::flash('message', 'Alteração realizada!'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->to('contact');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //
        Contact::where("id",$id)->delete();
        $request->Session()->flash('mensage','Apagado com sucesso');
        Session::flash('message', 'Deletado com Sucesso!'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->to('contact');

    }
}
