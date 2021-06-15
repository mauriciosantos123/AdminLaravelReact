<div class="row">
    <div class="col-10">
        <ul class="nav nav-tabs">

            <li class="nav-item">
                <a class="nav-link {{ (request()->is('client*')) ? 'active' : '' }}" href="{{route('clientRead',$reg->id)}}">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('finaceiro*')) ? 'active' : '' }}" href="{{route('finaceiroRead',$reg->id)}}">Financeiro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('service*')) ? 'active' : '' }}" href="{{route('serviceRead',$reg->id)}}">Serviço</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('portifolio*')) ? 'active' : '' }}" href="{{route('portifolioRead',$reg->id)}}">Portfólio</a>
            </li>

        </ul>
    </div>
