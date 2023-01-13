<x-style title="Criar tarefa pra Sprint {{$projeto->sprints[0]->id}}">

    {{-- {{dd($projeto->sprints)}} --}}

<form action="{{route('projetos.sprints.tarefas.store', ['projeto' => $projeto, 'sprint' => $sprint, 'tarefa' => $tarefa])}}" method="post">
    @csrf

        {{-- o "?" é Optional properties, recurso que já existia no laravel e que entrou no php 8 como null safe operator --}}
        @isset($tarefa->sprint[0]?->id)
            <input type="hidden" name="nome" value="{{$tarefa->sprint[0]->id}}">
        @endisset
        @isset($tarefa->comentario_tarefa)
            <input type="hidden" name="nome" value="nadaAComentar">
        @endisset
        {{-- {{dd($projeto)}} --}}
        {{-- {{dd($sprint)}} --}}

{{--
            <input type="hidden" name="nome" value="{{$sprint->id}}"> --}}

        <div class="container mt-3 col-md-8">
            <div class="form-group col-10">
                {{-- campo para nome da tarefa --}}
                <div class="input-group mb-3">
                    <span class="input-group-text" id="Nometarefa" >Título da tarefa</span>
                    <input value="{{ old('nome_projeto', $tarefa->nome_do_tarefa) }}"  placeholder="Nome da tarefa"type="text"  name="nome_do_tarefa" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
                    {{-- <input value="{{ old('nome_tarefa', $tarefa->nome_tarefa) }}"  placeholder="Nome da tarefa"type="text"  name="nome_tarefa" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" /> --}}
                  </div>
                {{-- fim do campo --}}
                {{-- campo para nome da tarefa --}}
                <div class="input-group mb-3">
                    <span class="input-group-text" id="Descricao" >Descricão</span>
                    <input value="{{ old('nome_projeto', $tarefa->descricao) }}"  placeholder="Nome da tarefa"type="text"  name="nome_do_tarefa" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
                    {{-- <input value="{{ old('nome_tarefa', $tarefa->nome_tarefa) }}"  placeholder="Nome da tarefa"type="text"  name="nome_tarefa" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" /> --}}
                  </div>
                {{-- fim do campo --}}




                  <button class="btn btn-primary" type="submit">Salvar </button>
                </div>
            </div>
        </div>


    </form>

</x-style>
