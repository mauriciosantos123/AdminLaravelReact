@extends('layout.app')
@section('title')
@endsection
@section('content')


@include('client.navMenuClientEdit')


<div id="smartwizard">
    <ul class="nav nav-tabs" hidden>
        <li class="nav-item">
            <a class="nav-link " href="#step-1"> <strong>Clientes</strong>
            </a>
        </li>

    </ul>

    <div class="tab-content">

        <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('client.update',$reg->id)}}" method="POST">
                        {{ csrf_field() }}
                        @method('PUT')
                        <div class="row" id="tab1">


                            <h3 class="text-center">Clientes</h3>
                            <div class="col-lg-7">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <label for="name_fantasy" class="form-label">Nome Fantasia</label>
                                                <input value="{{$reg->name_fantasy}}" type="text" class="form-control" id="name_fantasy" name="name_fantasy">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="company_name" class="form-label">Razão Social</label>
                                                <input value="{{$reg->company_name}}" type="text" class="form-control" id="company_name" name="company_name">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <label for="state_register" class="form-label">Inscrição Estadual</label>
                                                <input value="{{$reg->state_register}}" type="text" class="form-control" id="state_register" name="state_register">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="CNPJ" class="form-label">CPF/CNPJ</label>
                                               
                                                <input value="{{$reg->cnpj}}" type="text"  @if ($reg->cnpj <11) class="form-control cnpj" @else class="form-control cpf" @endif id="CNPJ" name="cnpj" maxlength="">
                                            </div>
                                        </div>
                                        <div class="row mt-2">

                                            <div class="col-md-6">
                                                <label for="email" class="form-label">Email</label>
                                                <input value="{{$reg->email}}" type="email" class="form-control" id="email" name="email">
                                            </div>
                                            <div class="col-6 ">
                                                <label for="tel" class="form-label">Telefone</label>
                                                <input value="{{$reg->tel}}" class="form-control phone_with_ddd" id="tel" name="tel" placeholder="(00)00000-0000"></input>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">

                                <div class="card">
                                    <div class="card-body">

                                        <div class="row mt-2">
                                            <div class="col">
                                                <label for="response_contact" class="form-label">Responsável pelo contrato</label>
                                                <input value="{{$reg->response_contact}}" class="form-control" id="response_contact" name="response_contact" placeholder="Ex: Thiago Ventura"></input>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col">
                                                <label for="tel_response" class="form-label">Telefone responsável</label>
                                                <input value="{{$reg->tel_response}}" type="text" class="form-control phone_with_ddd" id="tel_response" name="tel_response" placeholder="(00)00000-0000"></input>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col">
                                                <label for="email_response" class="form-label">E-mail responsável</label>
                                                <input value="{{$reg->email_response}}" type="text" class="form-control" id="email_response" name="email_response" placeholder="email@email.com"></input>
                                            </div>
                                        </div>

                                        <div class="form-check form-switch" hidden>
                                        <input class="form-check-input" style="float: right; font-size: 20px;" type="checkbox" name="active" id="active" value="{{$reg->active}}" @if ($reg->active == '1')
                                        checked
                                        @endif >
                                    </div>

                                    </div>
                                </div>
                            </div>
                            <div> <button type="submit" class="btn btn-outline-primary" style="float: right;">Salvar Mudanças</button></div>
                        </div>
                    </form>
                </div>
            </div>
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
            selected: 0,
        });
    });
</script>

@endsection