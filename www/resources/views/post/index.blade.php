@extends('layout.app')
@section('title')
<title>pagina Home</title>
@endsection
@section('content')

 <!--main content start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Table post</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{route('home.index')}}">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i>post</li>
            </ol>
          </div>
        </div>
        <!-- page start-->

        <!-- page end-->


        <!-- INICIO --> 

<div class="g-pa-20">
<div class="g-pa-20">
    <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">post</h1>
</div>
<div class="g-pa-20">
    <a href="{{route('post.create')}}" class="btn btn-primary">Novo post</a>
</div>
    <div class="table-borderless g-mb-40">
        <table class="table table-responsive table-bordered table-hover table-stripped">
            <thead>
                <tr> 
                    <th>Titulo</th>
                    <th>Resumo</th>
                    <th>Descrição</th>
                    <th>categoria</th> 
                    <th>Autor </th>
                    <th>Imagem </th>
                    <th>Data</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($listPost as $list)
                <tr>
                    <td>{{ $list->title }}</td>
                    <td>{{$list->summary}}</td>
                    <td>{{ $list->desc }}</td>
                    <td>{{ $list->category }}</td>
                    <td>{{ $list->author }}</td>
                    <td>{{$list->img}}</td>
                    <td>{{$list->date_post}}</td>                
                    <td>
                        <div class="g-pos-rel g-top-3 d-inline-block">                            <a  class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover" href="#"  data-dropdown-event="click" >
                                <i class="hs-admin-more-alt"></i>
                            </a>
                            <div class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 " >
                                <form action="{{route('post.destroy', $list->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')                                
                                    <ul class="list-unstyled g-nowrap mb-0">
                                        <li>
                                            <a class="btn btn-primary" href="{{route('post.edit',$list->id)}}">
                                             
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                            <button class="btn  btn-danger" type="submit">
              
                                                Delete
                                            </button>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- FIM -->


@endsection
@section('footer_content')
@endsection
