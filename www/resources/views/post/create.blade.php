@extends('layout.app')
@section('title')
<title>Create post</title>
@endsection
@section('content')


<div class="g-pa-20">
    <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">contacts</h1>
    <div class="g-mb-80">
        <form action="{{ route('post.store')}}" method="POST">
        {{ csrf_field() }}

            <div class="form-group">
                <label for="inputtitl">Titulo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Caminhos do amanha" >
            </div>


            <div class="form-group">
                <label for="inputauto">Autor</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="Camila pitanga" >
            </div>

            <div class="form-group g-mb-20">
            <select id="category" name="category" class="js-custom-select u-select-v1 g-brd-gray-light-v3 g-color-gray-dark-v5 rounded g-py-12" style="width: 100%;" data-placeholder="Categoria" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">

              <option>Categoria</option>
              <option value="Romance">Romance</option>
              <option value="Comedia">Comedia</option>
              <option value="Terror">Desing</option>
              <option value="Ficção">Ficção</option>
            </select>
          </div>


            <div class="form-group">
                <label for="inputsummary">Resumo</label>
                <input type="text" class="form-control" id="summary" name="summary">
            </div>         

            <div class="form-group">
                <label for="inputdesc">Descrição</label>
                <input type="text" class="form-control" id="desc" name="desc" >
            </div>


            <div class="form-group">
                <label for="inputimg">Imagem</label>
                <input type="text" class="form-control" id="img" name="img" >
            </div>

            <div class="form-group">
                <label for="inputdesc">Data criação</label>
                <input type="date" class="form-control" id="date_post" name="date_post" >
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection
@section('footer_content')
@endsection
