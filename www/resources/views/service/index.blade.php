@extends('layout.app')
@section('title')
@endsection
@section('content')
<div>
    <div id="smartwizard">
        <ul class="nav">

            <li class="nav-item">
                <a class="nav-link" href="#step-3"> <strong>Passo 3</strong>
                    <br>
                    Dados dos Serviços Contratados</a>
            </li>

        </ul>

        <div class="tab-content">


            <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                <div class="card-title d-flex align-items-center">
                    <div><i class="bx bxs-archive me-1 font-22 text-primary"></i>
                    </div>
                    <h5 class="mb-0 text-primary">Dados dos Serviços Contratados</h5>
                </div>
                <hr>
                <form action="{{route('service.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-6 mt-2">
                            <label for="name_sevice" class="form-label">Nome do serviço </label>
                            <input  class="form-control" id="name_sevice" name="name_sevice" placeholder=""></input>
                        </div>
                        <div class="col-6 mt-2">
                            <label for="desc" class="form-label">Descrição</label>
                            <input  class="form-control" id="desc" name="desc" placeholder="Ex:Blog"></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mt-2">
                            <label for="domain" class="form-label">Domínio</label>
                            <input  class="form-control" id="domain" name="domain" placeholder=""></input>
                        </div>
                        <div class="col-6 mt-2">
                            <label for="domain_link" class="form-label">Domínios para vincular</label>
                            <input  class="form-control" id="domain_link" name="domain_link"></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <input type="text" hidden name="client_id" value="{{$last}}">
                        </div>
                        <div class="col-sm-6 mt-2 mb-3">
                            <label class="form-label">Serviços contratados</label>
                            <!-- <select class="multiple-select" data-placeholder="Choose anything" multiple="multiple" name="contract_service"> -->
                            <select class="form-select" data-placeholder="Choose anything" name="contract_service">
                                @foreach ($listCategory as $list )

                                <option value="{{$list->id}}">{{ $list->name }} </option>

                                @endforeach


                            </select>
                        </div>

                    </div>
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