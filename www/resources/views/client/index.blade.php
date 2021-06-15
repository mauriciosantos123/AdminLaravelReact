@extends('layout.app')
@section('title')
<title>pagina Clientes</title>
@endsection
@section('content')



<!--breadcrumb-->


<div>
    <a href="{{route('client.create')}}" class="btn btn-outline-primary">Novo Cliente</a>
</div>
<!--end breadcrumb-->



<div class="row">
    <div class="col-xl mx-auto">

        <hr />
        <div class="card">
            <div class="card-body">
                <!-- @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif -->
                <table class="table table-striped mb-0" id="example">
                    <thead class="table">
                        <tr>
                            <th></th>
                            <th>Nome</th>
                            <th class="text-center">CPF/CNPJ </th>
                            <th class="text-center">Email</th>
                            <th>ativos</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($listClient as $i => $list)
                        <tr class="text-capitalize align-middle">


                            <!-- logo portfolio -->

                            @if ($list->portfolio === null)

                            <td class="pt-3">
                                <div class="d-flex align-items-center">
                                    <img src="/images/semFoto.png" alt="" class="" width="100" height="80">
                                    <div class="ms-3">
                            </td>


                            @else

                            @if ($list->portfolio->logo === null)

                            <td class="pt-3">
                                <div class="d-flex align-items-center">
                                    <img src="/images/semFoto.png" alt="" class="" width="100" height="80">
                                    <div class="ms-3">
                            </td> @else
                            <td class="pt-3">
                                <div class="d-flex align-items-center">
                                    <img src="{{$list->portfolio->logo}}" alt="user avatar" class="" width="100" height="80">
                                    <div class="ms-3">
                            </td>
                            @endif
                            @endif

                            <!--  fim logo portfolio -->

                            <td class="pt-3"><a href="{{route('clientRead',$list->id)}}">{{$list->name_fantasy}}</a></td>
                            <td @if ($list->cnpj <11) class="pt-3 text-center cnpj" @else class="pt-3 text-center cpf" @endif>{{$list->cnpj}}</td>
                            <td class="pt-3 text-center">{{$list->email}}</td>
                            <td class="pt-3 text-center">


                                <style>
                                    .form-check-input:checked {
                                        background-color: #5cfd0a;
                                        border-color: #80d80c;
                                    }
                                </style>

                                <form action="{{route('clientActivation',$list->id)}}" method="post" id="{{$list->id}}">
                                    {{ csrf_field() }}
                                    @method('PUT')
                                    <div class="form-check form-switch  ">
                                        <input class="form-check-input" style="float: right; font-size: 20px;" type="checkbox" name="active" id="active" value="{{$list->active}}" onclick="document.getElementById('{{$list->id}}').submit()" @if ($list->active == '1')
                                        checked
                                        @endif >
                                    </div>
                                    @if ($list->active == '1')
                                    <div hidden>ativo</div>
                                    @else
                                    <div hidden>Reprovado</div>
                                    @endif
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>
        <!--end row-->

        @endsection
        @section('footer_content')
        @endsection

        @section('script')
        <script src="/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
        <script src="/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
        <script>

        </script>



        @endsection