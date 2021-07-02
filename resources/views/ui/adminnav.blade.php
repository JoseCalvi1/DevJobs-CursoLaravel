<a href="{{ route('vacantes.index') }}" class="text-white text-sm uppercase font-bold p-3 {{ Request::is('vacantes') ? 'bg-blue-500' : '' }}">Ver vacantes</a>
<a href="{{ route('vacantes.create') }}" class="text-white text-sm uppercase font-bold p-3 {{ Request::is('vacantes/create') ? 'bg-blue-500' : '' }}">Nueva vacante</a>
