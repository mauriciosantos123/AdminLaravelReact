@extends('layout.app')
@section('title')
@endsection
@section('content')


<div class="g-pa-20">
    <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">Contato</h1>

    <div class="g-mb-80">
        <form action="{{route('contact.update',$reg->id)}}" method="POST">
            {{ csrf_field() }}
            @method('PUT')

            <div class="row">

                <div class="form-group col-sm-6">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="name" name="name" readonly value="{{ $reg->name }}">
                </div>

                <div class="form-group col-sm-6">
                    <label for="inputphone">Telefone </label>
                    <input type="text" class="form-control" id="phone" name="phone" readonly value="{{ $reg->phone }}">
                </div>


            </div>
            <div class="form-group">
                <label for="inputemail">Email</label>
                <input type="text" class="form-control" id="email" name="email" readonly value="{{ $reg->email }}">
            </div>


            <div class="form-group">
                <label for="inputmsg">Menssagem </label>
                <input type="text" class="form-control" id="msg" name="msg" readonly value="{{ $reg->msg }}">
            </div>

   
        </form>
    </div>
</div>

@endsection
@section('footer_content')
@endsection