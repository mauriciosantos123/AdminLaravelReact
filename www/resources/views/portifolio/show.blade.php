@extends('layout.app')
@section('title')
@endsection
@section('content')



@include('client.navMenuClientShow')
<div class="col-2 pt-2"><a href="{{route('portifolio.edit',$reg->id)}}">EDITAR</a></div>
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

        <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
            <div class="card">
                <div class="card-body">
                    <div class="g-pa-20">
                        <h3 class="text-center">Portfólio</h3>

                        <div class="g-mb-80">
                            <div class="row">

                                <div class="form-group col-sm mt-3">
                                    <label for="inputName">Name</label>
                                    <input readonly type="text" class="form-control" id="name" name="name" value="{{ $reg->name }}">
                                </div>

                                <div class="form-group col-sm-6 mt-3">
                                    <label for="inputurl">Link do site </label>
                                    <input readonly type="text" class="form-control" id="url" name="url" value="{{ $reg->url }}">
                                </div>
                            </div>



                            <div class="row">
                                <div class="form-group col-sm-6 mt-3">
                                    <label for="inputdata">data </label>
                                    <input readonly type="date" class="form-control date-form" id="date_portifolio" name="date_portifolio" value="{{ $reg->date_portifolio }}">
                                </div>




                                <div class=" col-sm-6  form-group mt-3">
                                    <label for="inputclient">Categoria</label>
                                    <select disabled id="category" name="category" class="form-select mb-3" style="width: 100%;" data-placeholder="Categoria" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
                                        <option>Selecione</option>
                                        @foreach($listCategory as $list)
                                        @if ($list->id == $reg->category_id)
                                        <option selected value='{{ $list->id }}'>{{ $list->name }} </option>
                                        @endif
                                        <option value='{{ $list->id }}'>{{ $list->name }} </option>


                                        @endforeach
                                    </select>
                                </div>

                            </div>


                            <div class="form-group  mt-3">
                                <label for="inputdesc">Descrição/link </label>
                                <input readonly type="text" class="form-control" id="desc" name="desc" value="{{ $reg->desc }}">
                            </div>

                            <div class="row">

                                <div class="form-group col-sm-6 mt-3">
                                    <label for="inputdesc">Logo: </label>
                                    <!-- <input readonly type="text" class="form-control" id="logo" name="logo" value="{{ $reg->logo }}"> -->
                                    @if($reg->logo == null)
                                                    @else

                                    <img src="{{ $reg->logo }}" alt="" width="200px" height="100px">
                                    @endif
                                </div>

                                <div class="form-group col-sm-6 mt-3">
                                    <label for="inputimg">Imagem: </label>
                                    <!-- <input readonly type="text" class="form-control" id="img" name="img" value="{{ $reg->img }}"> -->
                                    @if($reg->logo == null)
                                                    @else

                                    <img src="{{ $reg->img }}" alt="" width="200px" height="100px">
                                    @endif
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
            selected: 3,
        });
    });
</script>

@endsection