<x-style title="Projetos">


{{-- variavel com nome do projeto --}}

<div class="container mt-5">
    <a href="{{ route('projetos.create') }}">
        <button type="button" class="btn btn-primary">Criar Projeto</button>
    </a>

    {{-- <a href="{{ route('projetos.show') }}">
        <button type="button" class="btn btn-primary">Ver Projetos</button>
    </a> --}}
</div>

@foreach ($projetos as $projeto)


<x-card-projetos :projeto=$projeto>
    
</x-card-projetos>

@endforeach




</x-style>