@extends('layout.app')
@section('title')
<title>pagina Home</title>
@endsection
@section('content')

<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <a href="{{ route('contact.index')}}">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Contatos</p>
                            <h4 class="my-1">{{$contact}}</h4>
                            <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i> {{$contact}} Novos Contatos</p>
                        </div>
                        <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-chat'></i>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <div class="col">
    <a href="{{ route('client.index')}}">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">Clientes</p>
                        <h4 class="my-1">{{$clients}}</h4>
                        <p class="mb-0 font-13 text-success">&nbsp;</p>
                    </div>
                    <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-user'></i>
                    </div>
                </div>

            </div>
        </div>
        </a>
    </div>

</div>


@endsection
@section('footer_content')
@endsection