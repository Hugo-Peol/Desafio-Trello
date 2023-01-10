<x-style title="Sprint Nº {{$sprint->id}}" >

    {{-- lista select --}}

@isset($mensagemSucesso)
<div class="alert alert-success">
    {{ $mensagemSucesso }}
</div>
@endisset


<div class="btn-group" role="group" aria-label="Basic example">
    <a href="{{ route('projetos.sprints.create', $projeto->id) }}"  class="btn btn-success ">
    Ver sprint
    </a>









</x-style>
