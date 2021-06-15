@extends('layout.app')
@section('title')
@endsection
@section('content')
<div>
    <div id="smartwizard">
        <ul class="nav">

            <li class="nav-item">
                <a class="nav-link" href="#step-2"> <strong>Passo 2</strong>
                    <br>Dados do Financeiro</a>
            </li>

        </ul>

        <div class="tab-content">

            <!-- STEP 2 ----------------------------- -->


            <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">

                <div class="card-title d-flex align-items-center">
                    <div><i class="bx bx-money me-1 font-22 text-primary"></i>
                    </div>
                    <h5 class="mb-0 text-primary">Dados do Financeiro</h5>
                </div>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('financeiro.store')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-6 mt-2">
                                    <label for="response_finance" class="form-label">Responsável Financeiro*</label>
                                    <input required class="form-control" id="response_finance" name="response_finance" placeholder="Ex:Thiago Ventura" minlength="2"></input>
                                </div>
                                <div class="col-6 mt-2">
                                    <label for="contract_start" class="form-label">Início do contrato*</label>
                                    <input type="date" required class="form-control" id="contract_start" name="contract_start" min="2000-01-01" max="2050-01-01" maxlength="8" placeholder=""></input>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mt-2">
                                    <label for="tel_finance" class="form-label">Telefone financeiro*</label>
                                    <input required class="form-control phone_with_ddd" id="tel_finance" name="tel_finance" placeholder="(00)00000-0000" minlength="9"></input>
                                </div>

                                <div class="col-6 mt-2">
                                    <label for="email_finance" class="form-label">E mail financeiro*</label>
                                    <input required class="form-control" id="email_finance" name="email_finance" placeholder="email@email.com"></input>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mt-2">
                                    <label for="form_payment" class="form-label">Tipo de Contrato*</label>
                                    <select id="form_payment" name="form_payment" class="form-select" required>
                                        <option value="">Selecione a Opção </option>
                                        <option value="mensal">Mensal</option>
                                        <option value="anual">Anual</option>
                                        <option value="isento">Isento</option>
                                    </select>
                                </div>
                                <div class="col-6 mt-2">
                                    <label for="value" class="form-label">Valor*</label>
                                    <div class="input-group" style="float: right;">
                                        <span class="input-group-text">R$</span>
                                        <input required class="form-control money" id="value" name="value" style="text-align: right;" placeholder="R$ 120,00"></input>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mt-2">
                                    <label for="type_payment" class="form-label">Forma de pagamento </label>
                                    <select id="type_payment" name="type_payment" class="form-select">
                                        <option value="" selected>Selecione a Opção </option>
                                        <option value="boleto">Boleto</option>
                                        <option value="transferencia">Transferência</option>
                                        <option value="isento">Isento</option>
                                    </select>
                                </div>

                                <div class="col-6 mt-2">
                                    <label for="dt_payment" class="form-label">Data de pagamento*</label>
                                    <input required type="date" class="form-control" id="dt_payment" name="dt_payment" min="2000-01-01" max="2050-01-01" maxlength="8" placeholder=""></input>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mt-2">
                                    <label for="contract_end" class="form-label">Término do contrato </label>
                                    <input type="text" class="form-control" id="contract_end" name="contract_end" placeholder="Indeterminado"></input>
                                </div>
                                <div class="col-6 mt-2">
                                    <label for="readjustment" class="form-label">Reajuste</label>
                                    <input class="form-control" id="readjustment" name="readjustment" placeholder=""></input>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-6 mt-2">
                                    <label for="early_warning" class="form-label">Aviso prévio</label>
                                    <input class="form-control" id="early_warning" name="early_warning" placeholder=""></input>
                                </div>
                                <div class="col-6 mt-2">
                                    <label for="termination" class="form-label">Rescisão</label>
                                    <input class="form-control" id="termination" name="termination" placeholder=""></input>
                                </div>
                            </div>
                            <hr>
                            <input type="text" hidden name="client_id" value="{{$last}}">

                            <div class="row">
                                <div>
                                    <button type="submit" class="btn btn-primary" style="float: right;"> Proximo Passo </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
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
        // Toolbar extra buttons
        var btnFinish = $('<button></button>').text('Finish').addClass('btn btn-info').on('click', function() {
            alert('Finish Clicked');
        });
        var btnCancel = $('<button></button>').text('Cancelar').addClass('btn btn-danger').on('click', function() {
            $('#smartwizard').smartWizard("reset");
        });
        // Step show event
        $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
            $("#prev-btn").removeClass('disabled');
            $("#next-btn").removeClass('disabled');
            if (stepPosition === 'first') {
                $("#prev-btn").addClass('disabled');
            } else if (stepPosition === 'last') {
                $("#next-btn").addClass('disabled');
            } else {
                $("#prev-btn").removeClass('disabled');
                $("#next-btn").removeClass('disabled');
            }
        });
        // Smart Wizard
        $('#smartwizard').smartWizard({
            selected: 0,
            theme: 'dots',
            transition: {
                animation: 'slide-horizontal', // Effect on navigation, none/fade/slide-horizontal/slide-vertical/slide-swing
            },
            toolbarSettings: {
                toolbarPosition: 'both', // both bottom
                // toolbarExtraButtons: [btnCancel]
            }
        });
        // External Button Events
        $("#reset-btn").on("click", function() {
            // Reset wizard
            $('#smartwizard').smartWizard("reset");
            return true;
        });
        $("#prev-btn").on("click", function() {
            // Navigate previous
            $('#smartwizard').smartWizard("prev");
            return true;
        });
        $("#next-btn").on("click", function() {
            // Navigate next'
            $('#smartwizard').smartWizard("next");
            return true;
        });
        // Demo Button Events
        $("#got_to_step").on("change", function() {
            // Go to step
            var step_index = $(this).val() - 1;
            $('#smartwizard').smartWizard("goToStep", step_index);
            return true;
        });
        $("#is_justified").on("click", function() {
            // Change Justify
            var options = {
                justified: $(this).prop("checked")
            };
            $('#smartwizard').smartWizard("setOptions", options);
            return true;
        });
        $("#animation").on("change", function() {
            // Change theme
            var options = {
                transition: {
                    animation: $(this).val()
                },
            };
            $('#smartwizard').smartWizard("setOptions", options);
            return true;
        });
        $("#theme_selector").on("change", function() {
            // Change theme
            var options = {
                theme: $(this).val()
            };
            $('#smartwizard').smartWizard("setOptions", options);
            return true;
        });
    });
</script>

@endsection