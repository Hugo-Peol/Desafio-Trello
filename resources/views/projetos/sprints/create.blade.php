<x-style title="Criar Sprints">


    {{-- não lembro pq botei action mas sei pra q serve --}}

    <x-form-criar-sprint :projeto="$projeto" :sprint="$sprint" acao="{{route('projetos.sprints.store', ['projeto' => $projeto])}}" >



    </x-form-criar-sprint>



</x-style>
