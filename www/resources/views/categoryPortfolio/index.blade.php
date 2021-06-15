@extends('layout.app')
@section('title')
@endsection
@section('content')

<div class="row">
    <div class="col-xl-12 mx-auto">

        <div class="card">
            <div class="card-body">
                <form action="{{ route('categoryPortfolio.store')}}" method="POST">
                    {{ csrf_field() }}

                    <div class="row ">
                        <div class=" col-sm-6  form-group mt-2">
                            <label for="name">Cliente</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class=" col-sm-6  form-group mt-4 text-center">

                            <button type="submit" class="btn btn-primary">Salvar Nova Categoria</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="card">
        <div class="card-body">

            <div class="col-xl-6 mx-auto">
                <table class="table table-striped mb-0">
                    <thead class="table">
                        <tr>
                            <th>Nome</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listCateg as $list )
                        <tr>
                            <td>{{$list->name}}</td>

                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>


@endsection
@section('footer')
@endsection

@section('script')
@endsection