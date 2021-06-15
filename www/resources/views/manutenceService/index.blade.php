@extends('layout.app')
@section('title')
<title>pagina Home</title>
@endsection
@section('content')


<!--breadcrumb-->


<div>
        <a href="{{route('manutenceService.create')}}" class="btn btn-outline-primary">Nova ordem de serviço</a>
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
                                <table class="table table-striped   mb-0" id="example">
                                        <thead class="table">
                                                <tr>
                                                        <th class="text-center">N° da Ordem</th>
                                                        <th class="text-center">Valor</th>
                                                        <th class="text-center">Cliente</th>
                                                        <th class="text-center">Data Inicio</th>
                                                        <th class="text-center">Ações</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                                @foreach($listmanutenceService as $i => $list)
                                                <tr class="text-capitalize align-middle">


                                                        <td class="pt-3 text-center ">{{$list->id}}</td>

                                                        @if ($list->extra_value== null)
                                                        <td class="text-center">
                                                                <div class="row">
                                                                        <div class="col-sm-5 text-left align-left"style="text-align: left;" >R$</div>
                                                                        <div class="col-sm-7  text-right " style="text-align: right;"> <?php echo number_format(00, 2, ',', '.'); ?></div>
                                                                </div>
                                                        </td>
                                                        @else
                                                        <td class="text-center">
                                                                <div class="row">
                                                                        <div class="col-sm-5 text-left" style="text-align: left;">R$</div>
                                                                        <div class="col-sm-7  text-right "style="text-align: right;"> {{$list->extra_value}}</div>
                                                                </div>
                                                        </td>
                                                        @endif</td>

                                                        <td class="pt-3 text-center">{{$list->clients->name_fantasy}}</td>
                                                      
                                                        <td class="pt-3 text-center">{{date('d/m/Y',strtotime($list->dt_start)) }}</td>

                                                        <td class="pt-3 text-center"> <a href="{{route('manutenceServiceRead',$list->id)}}" class="btn btn-outline-primary btn-sm radius-30 px-4">Detalhes</a></td>
                                                        <!-- <td class="pt-3 text-center">
                                                                <form action="{{route('client.destroy', $list->id)}}" method="POST" id="form_del{{$list->id}}">
                                                                        @csrf
                                                                        @method('DELETE')

                                                                        <div class="d-flex order-actions text-center">
                                                                                <a href="{{route('client.edit',$list->id)}}" class="btn ms-3 text-center"><button type="button" class=" btn ms-3 text-center"><i class='bx bxs-edit'></i></button></a>

                                                                        </div>
                                                                </form>
                                                        </td> -->
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



                @endsection