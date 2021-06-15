@extends('layout.app')
@section('title')
@endsection
@section('content')




@include('client.navMenuClientEdit')



<div id="smartwizard">
    <ul class="nav nav-tabs" hidden>
        <li class="nav-item">
            <a class="nav-link " href="#step-3"> <strong>Clientes</strong>
            </a>
        </li>
        <li class="nav-item done">
            <a class="nav-link" href="#step-3"> <strong>Financeiro</strong>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#step-3"> <strong>Serviço</strong>
            </a>
        </li>


    </ul>
    <div class="tab-content">

        <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
            <form action="{{route('service.update',$reg->id)}}" method="POST">
                {{ csrf_field() }}
                @method('PUT')

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <h3 class="text-center">Serviço Contratado</h3>
                            <div class="col-lg">
                                <div class="card">
                                    <div class="card-body">


                                        <div class="row mt-2">

                                            <div class="col-6 mt-2">
                                                <label for="name_sevice" class="form-label">Nome do serviço </label>
                                                <input value="{{$reg->name_sevice}}" class="form-control" id="name_sevice" name="name_sevice" placeholder=""></input>
                                            </div>
                                            <div class="col-6 mt-2">
                                                <label for="desc" class="form-label">Descrição</label>
                                                <input value="{{$reg->desc}}" class="form-control" id="desc" name="desc" placeholder="Ex:Fora do ar"></input>
                                            </div>

                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-6 mt-2">
                                                <label for="domain" class="form-label">Domínio</label>
                                                <input value="{{$reg->domain}}" class="form-control" id="domain" name="domain" placeholder=""></input>
                                            </div>
                                            <div class="col-6 mt-2">
                                                <label for="domain_link" class="form-label">Domínios para vincular</label>
                                                <input value="{{$reg->domain_link}}" class="form-control" id="domain_link" name="domain_link"></input>
                                            </div>
                                        </div>
                                        <div class="row mt-2">

                                            <div class="col mt-2 mb-3">
                                                <label class="form-label">Serviços contratados</label>
                                                <select name="contract_service" id="extra" class="form-select"  onchange="showDiv('hidden_div', this)">
                                                    @foreach ($listCategory as $list)                                  
                                                    <option value="{{$list->id}}" {{$reg->category_id == $list->id ? 'selected' :''}}>{{ $list->name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <input hidden value="{{$reg->client_id}}" name="client_id">
                                        <button type="submit" class="btn btn-primary" style="float: right;"> Salvar</button>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>
</div>


@endsection
@section('footer_content')
@endsection
@section('script')
<script src="/assets/plugins/select2/js/select2.min.js"></script>
<script>
    $('.single-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
    $('.multiple-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
</script>

<script src="/assets/plugins/smart-wizard/js/jquery.smartWizard.min.js"></script>
<script>
    $(document).ready(function() {




        $('#smartwizard').smartWizard({
            selected: 2,
        });
    });
</script>

@endsection