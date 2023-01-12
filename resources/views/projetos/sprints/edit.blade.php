<x-style title="Criar Sprints">


    {{-- não lembro pq botei action mas sei pra q serve --}}

    <x-form-criar-sprint
        :projeto="$projeto"
        :sprint="$sprint"
        acao="{{route('sprints.update', [ 'sprint' => $sprint])}}"
        editar=1
    />






</x-style>
