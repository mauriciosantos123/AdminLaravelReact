@extends('layout.app')
@section('title')
@endsection
@section('content')




@include('client.navMenuClientEdit')
<div class="card">

    <div id="smartwizard">
        <ul class="nav nav-tabs" hidden>
            <li class="nav-item">
                <a class="nav-link " href="#step-4"> <strong>Clientes</strong>
                </a>
            </li>
            <li class="nav-item done">
                <a class="nav-link" href="#step-4"> <strong>Financeiro</strong>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#step-4"> <strong>Serviço</strong>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#step-4"> <strong>Portfólio</strong>
                </a>
            </li>
        </ul>


        <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
            <form action="{{route('portifolio.update',$reg->id)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h3 class="text-center">Portfólio</h3>

                            <div class="g-mb-80">
                                <div class="row">
                                    <div class="form-group col-sm mt-3">
                                        <label for="inputName">Name Portfólio</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $reg->name }}">
                                    </div>
                                </div>



                                <div class="row">
                                    <div class=" col-sm-6  form-group mt-3">
                                        <label for="inputclient">Categoria</label>
                                        <select id="category_id" name="category_id" class="form-select mb-3" style="width: 100%;" data-placeholder="Categoria" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
                         
                                            @foreach($listCategory as $list)
                                            <option value="{{$list->id}}" {{$reg->category_id == $list->id ? 'selected' :''}}>{{ $list->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form-group col-sm-6 mt-3">
                                        <label for="client_id">Codigo Cliente</label>
                                        <input readonly type="text" class="form-control" id="client_id" name="client_id" value="{{ $reg->client_id }}">

                                    </div>

                                    <div class="form-group  mt-3 mb-3">
                                        <label for="inputdesc">Descrição/link </label>
                                        <input type="text" class="form-control" id="desc" name="desc" value="{{ $reg->desc }}">
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-sm-6 mt-3">
                                            <label for="inputurl">Link do site </label>
                                            <input type="text" class="form-control" id="url" name="url" value="{{ $reg->url }}">
                                        </div>

                                        <div class="form-group col-sm-6 mt-3">
                                            <label for="inputdata">data </label>
                                            <input type="date" class="form-control date-form" id="date_portifolio" min="2000-01-01" max="2050-01-01" maxlength="8" name="date_portifolio" value="{{ $reg->date_portifolio }}">
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="col-sm-6 mt-3 form-group">
                                            <div class="card">
                                                <div class="card-body">
                                                    <label class="mb-0 text-uppercase text-center">Logo(182x100)</label>
                                                    <input value="{{$reg->logo}}" id="logo-uploadify" type="file" name="logo" accept="image/*" multiple>
                                                    @if($reg->logo == null)
                                                    @else
                                                    <img src="{{$reg->logo}}" class="text-center" width="200px" height="100px" alt="">
                                                @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 mt-3 form-group">
                                            <div class="card">
                                                <div class="card-body">
                                                    <label class="mb-0 text-uppercase text-center">Image(1920x1280)</label> <br>
                                                    <input value="{{$reg->img}}" id="image-uploadify" type="file" name="img" accept="image/*" multiple>
                                                    @if($reg->logo == null)
                                                    @else
                                                    <img src="{{$reg->img}}" alt="" width="200px" height="100px">
                                                @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-check form-switch  mt-3 col-sm-6">
                                            <label class="form-check-label " style="font-size: 20px;" for="destaque">Destaque na capa</label>
                                            <input class="form-check-input" style="float: right; font-size: 20px;" type="checkbox" id="destaque" value="{{$reg->destaque}}" @if ($reg->destaque == '1')
                                            checked
                                            @endif name="destaque">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" style="float: right;">Salvar </button>
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


<!-- upload imagens  -->
<script src="/assets/plugins/fancy-file-uploader/jquery.ui.widget.js"></script>
<script src="/assets/plugins/fancy-file-uploader/jquery.fileupload.js"></script>
<script src="/assets/plugins/fancy-file-uploader/jquery.iframe-transport.js"></script>
<script src="/assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
<script src="/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>

<script>
    $(document).ready(function() {
        $('#image-uploadify').imageuploadify();
        $('#logo-uploadify').imageuploadify();
    })
</script>
@endsection