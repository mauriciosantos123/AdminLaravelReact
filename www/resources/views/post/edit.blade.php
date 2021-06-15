@extends('layout.app')
@section('title')
@endsection
@section('content')

<div class="g-pa-20">
    <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">post</h1>

    <div class="g-mb-80">
        <form action="{{route('post.update',$reg->id)}}" method="POST">
            {{ csrf_field() }}
            @method('PUT')
           

            <div class="form-group">
                <label for="inputtitle">Titulo</label>
                <input type="text" class="form-control" id="title" name="title"  value="{{ $reg->title }}">
            </div>


            <div class="form-group">
                <label for="inputautor">autor</label>
                <input type="text" class="form-control" id="author" name="author"  value="{{ $reg->author }}">
            </div>

            <div class="form-group">
                <label for="inputcategory">Categoria</label>
                <input type="text" class="form-control" id="category" name="category"  value="{{ $reg->category }}">
            </div>

            <div class="form-group">
                <label for="inputsummary">Resumo </label>
                <input type="text" class="form-control" id="summary" name="summary" value="{{ $reg->summary }}">
            </div>

            <div class="form-group">
                <label for="inputdesc">Descrição/link </label>
                <input type="text" class="form-control" id="desc" name="desc" value="{{ $reg->desc }}">
            </div>

            <div class="form-group">
                <label for="inputimg">img </label>
                <input type="text" class="form-control" id="img" name="img" value="{{ $reg->img }}">
            </div>

            <div class="form-group">
                <label for="inputdata">data </label>
                <input type="date" class="form-control date-form" id="date_post" name="date_post" value="{{ $reg->date_post }}">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection
@section('footer_content')
@endsection
