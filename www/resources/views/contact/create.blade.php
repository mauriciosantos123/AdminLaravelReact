@extends('layout.app')
@section('title')
@endsection
@section('content')

<div class="g-pa-20">
    <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">contacts</h1>
    <div class="g-mb-80">
        <form action="{{ route('contact.store')}}" method="POST">
        {{ csrf_field() }}

            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="João Matias" >
            </div>

            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email@hotmail.com" >
            </div>

            <div class="form-group">
                <label for="inputphone">Telefone</label>
                <input type="text" class="form-control" id="phone" name="phone" max="11" placeholder="+55 (11) 999999999">
            </div>         

            <div class="form-group">
                <label for="inputmsg">Menssagem</label>
                <input type="text" class="form-control" id="msg" name="msg" >
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection
@section('footer_content')
@endsection
