@extends('layout.app')
@section('title')
@endsection
@section('content')


<!-- <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Contato</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{route('home.index')}}"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Contato</li>
            </ol>
        </nav>
    </div>

</div> -->



<!-- <a href="{{route('contact.create')}}" class="btn btn-outline-primary">Novo Contato</a> -->

<hr />
<div class="card">
    <div class="card-body">
        @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
        <table class="table table-striped mb-0" id="tableContact">
            <thead class="table">
                <tr>
                    <th class="pt-3 ">Nome</th>
                    <th class="pt-3 text-center">Email</th>
                    <th class="pt-3 text-center">Telefone</th>
                    <th class="pt-3 text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($liscContact as $list)
                <tr class="text-capitalize">
                    <td class="pt-3 "><a href="{{route('contact.edit',$list->id)}}">{{ $list->name }}</a></td>
                    <td class="pt-3 text-center">{{$list->email}}</td>
                    <td class="pt-3 text-center phone_with_ddd">{{$list->phone}}</td>

                    <td class="pt-3 text-center">


                        <div class="ms-auto">
                            <div class="btn-group">



                                <form action="{{route('client.destroy', $list->id)}}" method="POST" id="form_del{{$list->id}}">
                                    @csrf
                                    @method('DELETE')

                                    <div class="d-flex order-actions text-center">
                                        <a href="{{route('client.edit',$list->id)}}" class="btn ms-3 text-center"><button type="button" class=" btn ms-3 text-center"><i class='bx bxs-edit'></i></button></a>
                                        <!-- <a class="ms-3 text-center" href="javascript:{{{$list->id}}}" onclick="document.getElementById('form_del{{$list->id}}').submit();"><i class='bx bxs-trash '></i></a> -->
                                        <button type="button" class=" btn ms-3 text-center" data-bs-toggle="modal" data-bs-target="#ModalDelet{{$list->id}}"><i class='bx bxs-trash '></i></button>
                                        <!-- MODEL _____ -->
                                        <div class="modal fade" id="ModalDelet{{$list->id}}" tabindex="-1" aria-labelledby="ModalDeletLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="ModalDeletLabel">Excluir Clientes</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">Ao excluir você perderar todos os dados do cliente:"{{$list->name_fantasy}}".</div>

                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-danger">Deletar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ENDMODEL_____________ -->
                                    </div>
                                </form>
                         
                            </div>
                        </div>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<!-- FIM -->



@endsection
@section('footer_content')
@endsection
@section('script')
        <script src="/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
        <script src="/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#tableContact').DataTable();
            });
        </script>



        @endsection