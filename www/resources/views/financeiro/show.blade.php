@extends('layout.app')
@section('title')
@endsection
@section('content')



@include('client.navMenuClientShow')
<div class="col-2 pt-2"><a href="{{route('financeiro.edit',$reg->id)}}">EDITAR</a></div>
</div>



<div id="smartwizard">
    <ul class="nav nav-tabs" hidden>
        <li class="nav-item">
            <a class="nav-link " href="#step-1"> <strong>Clientes</strong>
            </a>
        </li>
        <li class="nav-item done">
            <a class="nav-link" href="#step-2"> <strong>Financeiro</strong>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#step-3"> <strong>Serviço</strong>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#step-4"> <strong>Portfólio</strong>
            </a>
        </li>
    </ul>
    <div class="tab-content">

        <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h3 class="text-center">Financeiro</h3>
                        <div class="col-lg-7">
                            <div class="card">
                                <div class="card-body">


                                    <div class="row ">
                                    <div class="col-6 ">
                                            <label for="type_payment" class="form-label">Tipo de Contrato</label>
                                            <select disabled id="type_payment" name="type_payment" class="form-select">

                                                @if ($reg->type_payment == "mensal")
                                                <option>Selecione a Opção </option>
                                                <option selected value="mensal">Mensal</option>
                                                <option value="anual">Anual</option>
                                                <option value="isento">Isento</option>
                                                @endif
                                                @if ($reg->type_payment == "anual")
                                                <option>Selecione a Opção </option>
                                                <option value="mensal">Mensal</option>
                                                <option selected value="anual">Anual</option>
                                                <option value="isento">Isento</option>
                                                @endif
                                                @if ($reg->type_payment == "isento")
                                                <option>Selecione a Opção </option>
                                                <option value="mensal">Mensal</option>
                                                <option value="anual">Anual</option>
                                                <option selected value="isento">Isento</option>
                                                @endif


                                            </select>
                                        </div>

                                        <div class="col md-6">
                                            <label for="value" class="form-label ">Valor</label>
                                            <div class="input-group" style="float: right;">
                                                <span class="input-group-text">R$</span>
                                                <input readonly value="{{$reg->value}}" class="form-control money" style="text-align: right;" id="value" value="" name="value" placeholder=""></input>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                            <label for="readjustment" class="form-label">Reajuste</label>
                                            <input readonly value="{{$reg->readjustment}}" type="text" class="form-control" value="" id="readjustment" name="readjustment">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="early_warning" class="form-label">Aviso prévio</label>
                                            <input readonly value="{{$reg->early_warning}}" type="text" class="form-control" value="" id="early_warning" name="early_warning">
                                        </div>
                                    </div>
                                    <div class="row mt-2">

                                    <div class="col-md-6 mt-2">
                                            <label for="termination" class="form-label">Recisão</label>
                                            <input readonly value="{{$reg->termination}}" type="text" class="form-control" value="" id="termination" name="termination">
                                        </div>

                                        <div class="col-6 mt-2">
                                                <label for="form_payment" class="form-label">Forma de pagamento </label>
                                                <select disabled id="form_payment" name="form_payment" class="form-select">

                                                    @if ($reg->form_payment == "boleto")

                                                    <option selected value="boleto">Boleto</option>
                                                    <option value="transferencia">Transferência</option>
                                                    <option value="isento">Isento</option>
                                              
                                                    @elseif ($reg->form_payment == 'transferencia')

                                                    <option value="boleto">Boleto</option>
                                                    <option selected value="transferencia">Transferência</option>
                                                    <option value="isento">Isento</option>
                                        
                                                    @elseif ($reg->form_payment == 'isento')

                                                    <option value="boleto">Boleto</option>
                                                    <option selected value="transferencia">Transferência</option>
                                                    <option value="isento">Isento</option>
                                                    @elseif ($reg->form_payment != 'isento'&&'transferencia'&&'boleto')

                                                    <option value="">Selecione</option>
                                                    <option value="boleto">Boleto</option>
                                                    <option value="transferencia">Transferência</option>
                                                    <option value="isento">Isento</option>
                                                    @endif

                                                </select>
                                            </div>

                                    </div>
                                    <div class="row mt-2">

                                        <div class="col-md-6 mt-2">
                                            <label for="contract_start" class="form-label">Início do contrato</label>
                                            <input readonly value="{{$reg->contract_start}}" type="date" class="form-control" value="" id="contract_start" name="contract_start">
                                        </div>
                                        <div class="col-6 mt-2">
                                            <label for="contract_end" class="form-label">Término do contrato </label>
                                            <input readonly required type="text" class="form-control" value="{{$reg->contract_end}}" id="contract_end" name="contract_end" placeholder="Indeterminado"></input>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">

                            <div class="card">
                                <div class="card-body">
                                <div class="row ">
                                    <div class="col ">
                                        <label for="response_finance" class="form-label">Responsável pelo Financeiro</label>
                                        <input readonly class="form-control" value="{{$reg->response_finance}}" id="response_finance" name="response_finance" placeholder="Ex: Thiago Ventura"></input>
                                    </div>
                                    </div>
                                    <div class="row mt-2">
                                    <div class="col">
                                        <label for="tel_finance" class="form-label">Telefone responsável</label>
                                        <input readonly value="{{$reg->tel_finance}}" type="text" value="" class="form-control phone_with_ddd" id="tel_finance" name="tel_finance" placeholder="(00)00000-0000"></input>
                                    </div>
                                    </div>
                                    <div class="row mt-2">
                                    <div class="col mt-2">
                                        <label for="email_finance" class="form-label">E-mail responsável</label>
                                        <input readonly type="text" value="{{$reg->email_finance}}" class="form-control" id="email_finance" name="email_finance" placeholder="email@email.com"></input>
                                    </div>
                                    </div>
                                    <div class="row mt-2">
                                    <div class="col mt-2 ">
                                        <label for="dt_payment" class="form-label">Data de pagamento </label>
                                        <input readonly type="date" value="{{$reg->dt_payment}}" class="form-control" id="dt_payment" name="dt_payment"></input>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                selected: 1,
            });
        });
    </script>

    @endsection