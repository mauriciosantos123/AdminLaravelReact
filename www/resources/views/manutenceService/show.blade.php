@extends('layout.app')
@section('title')
@endsection
@section('content')

<div class="row">
    <div class="col-sm-6">
        <a href="{{route('manutenceService.edit',$reg->id)}}" class="btn btn-outline-primary">Editar ordem de serviço </a>
    </div>
    <div class="col-sm-6  order-actions" style="text-align: right;">
        <span class="btn btn-outline-primary pl-4" style="text-align: right;" onclick="printDiv('tela')" value=""><i class='bx bx-printer'></i>PDF</span>
    </div>
</div>
<hr>
<!-- inicio impressão  -->
<div class="card " id="tela">
    <div class="card-body">
        <div class="text-center">
            <img src="/images/logos/logoMcsys.png" alt="" width="200px" height="100px">
        </div>
        <div>
            <div class="row">
                <div class="col-sm-6">
                    <h2>Ordem de Serviço </h2>
                </div>
                <div class="col-sm-6 " style="text-align: right;">
                    @if ($reg->approved == 0)
                    <h5>Reprovada</h5>

                    @else
                    <h5>Aprovada</h5>
                    @endif
                </div>
            </div>

            <span> N° : {{$reg->id}} </span>
        </div>

        <div class="mt-2">
            <h6>Cliente: </h6>
            <span> {{$reg->clients->name_fantasy}} </span>
        </div>
        <div class="pt-2">
            <h5>Descrição :</h5>
            <div class="card">
                <div class="card-body" style="background-color: f2efef;">
                    <div>
                        <span class="pt-2"> {{$reg->type_service}}</span>
                    </div>
                    <div class="pt-2">
                        <span class="pt-2">Inicio da ordem de serviço : {{date('d/m/Y', strtotime($reg->dt_start))}}</span>
                    </div>
                    <div class="pt-2">
                        @if ($reg->dt_finish == null)
                        <span class="pt-2">Termino da ordem de serviço :Serviço ainda não finalizado </span>
                        @else
                        <span class="pt-2">Termino da ordem de serviço : {{date('d/m/Y', strtotime($reg->dt_finish))}}</span>
                        @endif
                    </div>
                    <div class="pt-2">
                        @if ($reg->completion_time == true)
                        <span class="pt-2">Previsão de termino da ordem de serviço : {{date('d/m/Y', strtotime($reg->completion_time))}}</span>

                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="card radius-10 bg-gradient">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-dark">Valor do serviço</p>
                                @if ($reg->extra_value == null)
                                <h4 class="text-dark my-1">R$ 00,00</h4>
                                @else
                                <h4 class="text-dark my-1">R$ {{$reg->extra_value}}</h4>
                                @endif
                            </div>
                            <div class="text-dark ms-auto font-35"><i class='bx bx-money'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="card radius-10 bg-gradient">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-dark">Cliente Contratado</p>

                                <h4 class="text-dark my-1">{{$reg->clients->name_fantasy}}</h4>

                            </div>
                            <div class="text-dark ms-auto font-35"><i class='bx bx-user'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card radius-10 bg-gradient">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-dark">Responsavel pelo Contrato</p>

                                <h4 class="text-dark my-1">__________</h4>

                            </div>
                            <div class="text-dark ms-auto font-35"><i class='bx bx-group'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <footer class="" st>
        <div class="row footer-bottom">
            <div class="col-lg text-center  mb-2 align-self-center pb-0">
                <p class="mb-0 text-muted"> <a href="{{route('home.index')}}">Mcsys © 2020.</a> Uma empresa do Grupo <a href="https://cartaomasterclin.com.br/" target="_blank" rel="noopener noreferrer">MasterClin </a></p>
            </div>
        </div>
    </footer>
</div>
<!-- fim impressão  -->
@endsection


@section('script')
<!-- IMPRIMIR CONTEUDO DA DIV  -->
<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;


        window.print();
        window.location.reload(true);

        document.body.innerHTML = originalContents;
    }
</script>
@endsection