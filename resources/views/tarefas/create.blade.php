<x-style title="Criar tarefa pra Sprint {{$projeto->sprints[0]->id}}">

    {{-- {{dd($projeto->sprints)}} --}}

    <form action="{{route('projetos.sprints.tarefas.store', ['projeto' => $projeto, 'sprint' => $sprint, 'tarefa' => $tarefa])}}" method="post">
        @csrf
        {{-- {{dd($sprint)}} --}}

        <input type="hidden" name="sprint_id" value="{{$sprint->id}}">


        <input type="hidden" name="usuario_id" value="1">
        <input type="hidden" name="numero_tarefa" value="1">
        <input type="hidden" name="comentario_tarefa" value="nadaAComentar">
        <input type="hidden" name="nome" value="padrao">
        <input type="hidden" name="numero_sprint" value="{{$projeto->sprints[0]->id}}">
        {{-- {{dd($sprint->sprintAtivo())}} --}}
        {{-- {{dd($projeto->sprint)}} --}}

        {{-- {{dd($projeto)}} --}}
        {{-- {{dd($sprint)}} --}}

        {{--            <input type="hidden" name="nome" value="{{$sprint->id}}"> --}}

        <div class="container mt-3 col-md-8">
            <div class="form-group col-10">
                {{-- campo para nome da tarefa --}}
                <div class="input-group mb-3">
                    <span class="input-group-text" id="Nometarefa" >Título da tarefa</span>
                    <input value=""  placeholder="Título da tarefa"type="text"  name="titulo_tarefa" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />

                  </div>
                {{-- fim do campo --}}
                {{-- campo para nome da tarefa --}}
                <div class="input-group mb-3">
                    <span class="input-group-text" id="descricao" >Descricão</span>
                    <input value=""  placeholder="Descreva a tarefa"type="text"  name="descricao" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
                    {{-- <input value="{{ old('nome_tarefa', $tarefa->nome_tarefa) }}"  placeholder="Nome da tarefa"type="text"  name="nome_tarefa" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" /> --}}
                  </div>
                {{-- fim do campo --}}
                  <button class="btn btn-primary" type="submit">Salvar </button>
                </div>
            </div>
        </div>


    </form>

</x-style>
