<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link  {{ (request()->is('client*')) ? 'active' : '' }}" href="{{route('client.edit',$reg->id)}}">Clientes</a>
    </li>
    <li class="nav-item">
        <a class="nav-link  {{ (request()->is('financeiro*')) ? 'active' : '' }}" href="{{route('financeiro.edit',$reg->id)}}">Financeiro</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ (request()->is('service*')) ? 'active' : '' }}" href="{{route('service.edit',$reg->id)}}">Serviço</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ (request()->is('portifolio*')) ? 'active' : '' }} " href="{{route('portifolio.edit',$reg->id)}}">Portfólio</a>
    </li>
</ul>
