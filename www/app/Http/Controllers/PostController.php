<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{


    public function process_form(Request $request)
    {
        //fazer o banco e definir a chamada
        $data = array();
        $data['title']=$request->title;
        $data['summary']=$request->summary;
        $data['desc']=$request->desc;
        $data['category']=$request->category;
        $data['author']=$request->author;
        $data['img']=$request->img;
        $data['date_post']=$request->date_post;
        return $data;

    }    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listPost = Post::get();
        $data['listPost']=$listPost;

        return view ('post.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $listPost = Post::get();
        $data['listPost']=$listPost;

        return view ('post.create',$data);

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
        Post::create($this->process_form($request));

        $request->session()->flush('alert','Cadastrado com sucesso ');

        return redirect()->to('post');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $data['id']=$id;


        $reg = Post::findOrFail($id);
        $data['reg'] = $reg;

        return view('post.edit',$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $reg = Post::findOrFail($id);

        $reg->update($this->process_form($request));

        $request->session()->flush('alert','Editado com sucesso!');

        return redirect()->to('post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //
        Post::where("id",$id)->delete();
        $request->session()->flush('alert','Deletado com sucesso!');

        return redirect()->to('post');
    }
}
