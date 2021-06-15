@extends('layout.app')
@section('title')
<title>pagina portfólio</title>
@endsection
@section('content')



<!--breadcrumb-->


<div>
    <!-- <a href="{{route('portifolio.create')}}" class="btn btn-outline-primary">Novo Portfolio</a> -->
</div>
<!--end breadcrumb-->



<div class="row">
    <div class="col-xl mx-auto">

        <hr />
        <div class="card">
            <div class="card-body">
                <table class="table table-striped mb-0" id="portfolio">
                    <thead class="table">
                        <tr>
                            <th>Nome</th>
                            <th>Data</th>
                            <th>URL</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($listPorti as $list)
                        <tr class="text-capitalize" >
                            <td class="pt-3"><a href="{{route('portifolio.edit',$list->id)}}">{{ $list->name }}</a></td>
    
                            <td class="pt-3">{{$list->date_portifolio}}</td>
                            <td class="pt-3">{{$list->url}}</td>

                            <td class="pt-3 text-center">



                                <form action="{{route('portifolio.destroy', $list->id)}}" method="POST" id="form_del">
                                    @csrf
                                    @method('DELETE')

                                    <div class="d-flex order-actions text-center">
                                    <a href="{{route('portifolio.edit',$list->id)}}" class="text-center"><i class='bx bxs-edit'></i></a>
                                    <a class="ms-3 text-center" href="javascript:{}"  onclick="document.getElementById('form_del').submit();"><i class='bx bxs-trash '></i></a>
                                    </div>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>
</div>
<!--end row-->



@endsection
@section('footer_content')
@endsection

@section('script')
	<script src="/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#portfolio').DataTable();
		  } );
	</script>
	
    @endsection