@extends('layout.app')
@section('title')
@endsection
@section('script_inicial')

@endsection

@section('content')
<div class="card">
    <div class="card-body p-4">
        <h5 class="card-title">Ordem de Serviço</h5>
        <hr />
        <div class="form-body mt-4">
            <form action="{{route('manutenceService.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-8">
                        <div class="border border-3 p-4 rounded">
                            <div class="mb-3">
                                <!-- <label for="order_service" class="form-label">Numero da Ordem*</label>
                                <input type="text" class="form-control"  id="order_service" name="order_service" placeholder="000001"> -->
                            </div>
                            <div class="col-12 ">
                                <label for="client_id" class="form-label">Cliente*</label>
                                <select class="single-select" data-placeholder="Escolha um" name="client_id">
    
                                    @foreach ($listClinet as $list )
                                    <option value="{{$list->id}}">00{{$list->id}}.{{ $list->name_fantasy }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 mt-2">
                                <label for="type_service" class="form-label">Descrição*</label>
                                <textarea required class="form-control" id="type_service" name="type_service" rows="4" maxlength="255" placeholder="EX:Falha ao enviar o cadastro para o servidor"></textarea>
                            </div>

                            <div class="col-12 ">
                                <label for="service_id" class="form-label">Tipo de Serviço*</label>
                                <select class="form-select" name="service_id" required>
    
                                    @foreach ($listcategory as $list )
                                    <option value="{{$list->id}}">{{ $list->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6">

                                    <label for="extra_value" class="form-label mt-2">Pagamento</label>
                                    <select name="categorypayments_id" id="extra" class="form-select" onchange="showDiv('hidden_div', this)">
                                        <option value="">Selecione </option>
                                      @foreach ($listPaymCategory as $list )
                                          <option value="{{$list->id}}">{{$list->name}}</option>
                                      @endforeach
                                    </select>

                                    <!-- <input id="hidden_div" type="text" class="form-control money mt-2" id="extra_value" style="display: none; " name="extra_value" placeholder="R$ 00.00"> -->

                                </div>

                                <div class="col-md-6">
                                    <label for="extra_value" class="form-label mt-2">Valor do Serviço</label>
                                    <input type="text" class="form-control money " id="extra_value" name="extra_value" placeholder="R$ 00.00">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="border border-3 p-4 rounded">
                            <div class="row g-3">



                                <div class="col-md-12">
                                    <label for="dt_start" class="form-label">Inicio Do Serviço*</label>
                                    <input value="" type="date" class="form-control" id="dt_start" name="dt_start" min="1950-01-01" max="2050-01-01" maxlength="8" required>

                                </div>
                                <div class="col-md-12">
                                    <label for="completion_time" class="form-label mt-2">Previsão de Termino</label>
                                    <input type="date" class="form-control" id="completion_time" name="completion_time" min="1950-01-01" max="2050-01-01" maxlength="8">
                                </div>
                                <div class="col-md-12">
                                    <label for="dt_finish" class="form-label">Termino do Serviço</label>
                                    <input type="date" class="form-control" id="dt_finish" name="dt_finish" min="1950-01-01" max="2050-01-01" maxlength="8">
                                </div>

                                <div class="row pt-2">


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

                                    <div class="form-check form-switch">

                                        <input class="form-check-input" type="checkbox" id="checkAproved" name="approved" checked>
                                        &nbsp; &nbsp; &nbsp;
                                        <label class="form-check-label align-middle pt-2 pl-2 pr-5" for="checkAproved">Aprovado</label>
                                    </div>
                             
                                    
                              
                                </div>

                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Salvar Ordem de Serviço</button>
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
@section('script')
<script src="/assets/plugins/select2/js/select2.min.js"></script>

<script>
    function showDiv(divId, element) {
        document.getElementById(divId).style.display = element.value == 1 ? 'block' : 'none';
    }
</script>

<!-- filtro no select  -->
<script>
    $('.single-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
</script>

<!-- trazer data atual no date -->
<script>
    $(document).ready(function() {
        var date = new Date();

        var day = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();

        if (month < 10) month = "0" + month;
        if (day < 10) day = "0" + day;

        var today = year + "-" + month + "-" + day;
        $("#dt_start").attr("value", today);
    });
</script>

<!-- trocar o texto checkbox   -->
<script>
$('#checkAproved').click(function() {
  if ($(this).is(':checked')) {
    $(this).siblings('label').html('Aprovado');
  } else {
    $(this).siblings('label').html(' Não Aprovado');
  }
});
</script>




@endsection