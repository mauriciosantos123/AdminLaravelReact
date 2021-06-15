@extends('layout.app')
@section('title')
@endsection
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div>
    <div id="smartwizard">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="#step-1"> <strong>Passo 1</strong>
                    <br>Dados Do Cliente</a>
            </li>

        </ul>

        <div class="tab-content">
            <!-- STEP 1 ----------------------------- -->
            <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">

                <!-- STEP 1 ----------------------------- -->
                <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">

                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                        </div>
                        <h5 class="mb-0 text-primary">Dados do Cliente*</h5>
                    </div>
                    <hr>
                    <form action="{{route('client.store')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label for="name_fantasy" class="form-label">Nome Fantasia*</label>
                                <input required type="text" class="form-control" value="" id="name_fantasy" name="name_fantasy" minlength="2">
                            </div>
                            <div class="col-md-6">
                                <label for="company_name cnpj" class="form-label">Razão Social*</label>
                                <input required type="text" class="form-control" value="" id="company_name" name="company_name" minlength="2">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label for="state_register" class="form-label">Inscrição Estadual*</label>
                                <input required type="text" class="form-control" value="" id="state_register" name="state_register">
                            </div>
                            <div class="col-md-6">
                                <label for="CNPJ" class="form-label">CPF/CNPJ*</label>
                                <input required type="text" class="form-control cpfcnpj" value="" id="CNPJ" name="cnpj" minlength="11" maxlength="14">
                            </div>
                        </div>
                        <div class="row mt-2">

                            <div class="col-md-6">
                                <label for="email" class="form-label">Email*</label>
                                <input required type="email" class="form-control" value="" id="email" name="email">
                            </div>
                            <div class="col-6 ">
                                <label for="tel" class="form-label">Telefone*</label>
                                <input required class="form-control phone_with_ddd" id="tel" value="" name="tel" placeholder="(00)00000-0000" minlength="9"></input required>
                            </div>


                        </div>
                        <div class="row mt-2">

                            <div class="col-4">
                                <label for="response_contact" class="form-label">Responsável pelo contrato</label>
                                <input required class="form-control" value="" id="response_contact" name="response_contact" placeholder="Ex: Thiago Ventura"></input required>
                            </div>
                            <div class="col-4">
                                <label for="tel_response" class="form-label">Telefone responsável</label>
                                <input required type="text" value="" class="form-control phone_with_ddd" id="tel_response" name="tel_response" placeholder="(00)00000-0000"  minlength="9"></input required>
                            </div>
                            <div class="col-4">
                                <label for="email_response" class="form-label">E-mail responsável</label>
                                <input required type="text" value="" class="form-control" id="email_response" name="email_response" placeholder="email@email.com"></input required>
                            </div>
                        </div>
                        <div class="row">
                        <style>
                                        .form-check-input:checked {
                                            background-color: #5cfd0a;
                                            border-color: #80d80c;
                                        }

                                        .form-switch .form-check-input {
                                            width: 3em;
                                            height: 2em;
                                            margin-left: 1px;
                                            padding-left: 2px;
                                            background-position: left center;
                                            border-radius: 3em;
                                        }
                                    </style>

                                    <div class="col-sm-3  pt-3 form-check form-switch">

                                        <input class="form-check-input" type="checkbox" id="checkAproved" name="active" checked>
                                        &nbsp; &nbsp; &nbsp;
                                        <label class="form-check-label align-middle pt-2 pl-2 pr-5" for="checkAproved">Ativo</label>
                                    </div>

                            <div class=" col-sm 5 mt-3" >
                                <button type="submit" class="btn btn-primary" style="float: right;">Proximo Passo</button>
                            </div>
                        </div>
                    </form>
                    <hr>
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

<script>
$('#checkAproved').click(function() {
  if ($(this).is(':checked')) {
    $(this).siblings('label').html('Ativo');
  } else {
    $(this).siblings('label').html(' Não Ativo');
  }
});
</script>


@endsection