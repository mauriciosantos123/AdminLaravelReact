@extends('layout.app')
@section('title')
@endsection
@section('content')




<div class="row">
    <div class="col-xl-12 mx-auto">

        <div class="card">
            <div class="card-body">

                <!-- SmartWizard html -->
                <div id="smartwizard" class="sw sw-theme-dots sw-justified">
                    <ul class="nav">

                        <li class="nav-item">
                            <a class="nav-link inactive active" href="#step-4"> <strong>Passo 4</strong>
                                <br>Dados do Portfólio</a>
                        </li>
                    </ul>

                    <div class="">

                        <!-- STEP 4 -------------------------- -->

                        <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-devices me-1 font-22 text-primary"></i>
                                </div>
                                <h5 class="mb-0 text-primary">Dados do Portfólio</h5>
                            </div>

                            <form action="{{ route('portifolio.store')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="inputName">Nome do Portfólio</label>
                                    <input type="text" class="form-control" id="name" name="name"  placeholder="Ex :Cartão MasterClin Vantagens ">
                                </div>

                                <div class="row">

                                <div class=" col-sm-6  form-group mt-3">
                                    <label for="category_id">Categoria</label>
                                    <select id="category_id" name="category_id" class="form-select mb-3" style="width: 100%;" data-placeholder="Categoria" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
                                        <option value="">Selecione</option>
                                        @foreach($listCategory as $list)
                                        <option value="{{$list->id}}">{{ $list->name }} </option>
                                        @endforeach
                                    </select>
                                </div>


                                    <div class=" col-sm-6  form-group mt-3">
                                        <label for="inputclient">Cliente</label>
                                        <input readonly type="text" class="form-control" id="client_id" name="client_id"  value="{{$last}}">
                                    </div>

                                </div>

                                <div class="form-group mt-3">
                                    <label for="inputdesc">Descrição</label>
                                    <input type="text" class="form-control" id="desc"  name="desc">
                                </div>


                                <div class="row">
                                    <div class="form-group mt-3 col-sm-6">
                                        <label for="inputdesc">Data criação</label>
                                        <input type="date" class="form-control" id="date_portifolio" min="2000-01-01" max="2050-01-01" maxlength="8" name="date_portifolio">
                                    </div>

                                    <div class="form-group mt-3 col-sm-6">
                                        <label for="inputurl">Link do site</label>
                                        <input type="text" class="form-control" id="url"  name="url">
                                    </div>
                                </div>

                                <div class="row">
                                
                                    <div class="col-sm-6 mt-3 form-group">
                                        <div class="card">
                                            <div class="card-body">
                                                <label class="mb-0 text-uppercase text-center">Logo</label>
                                                <input id="logo-uploadify" type="file" name="logo"  accept="image" multiple>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-6 mt-3 form-group">
                                        <div class="card">
                                            <div class="card-body">
                                                <label class="mb-0 text-uppercase text-center">Image</label>
                                                <input id="image-uploadify" type="file" name="img"  accept="image/*" multiple>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                </div>

                                <div class="row">

                                    <div class="form-check form-switch  mt-3 col-sm-6">
                                        <label class="form-check-label " style="font-size: 20px;" for="destaque">Destaque na capa</label>
                                        <input class="form-check-input" style="float: right; font-size: 20px;" type="checkbox" id="destaque" name="destaque">

                                    </div>

                                    <div class="col-sm-6 mt-3">
                                        <button type="submit" class="col-sm-6 btn btn-primary " style="float: right;">Salvar</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--end row-->


<!-- ---------------------------------------------------------------------------- -->




@endsection
@section('footer')
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