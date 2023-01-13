<x-style title="Tarefas">

    <div class="container d-inline ">
        <form class="d-inline" col-md-9 action="" method="post">
            {{-- @csrf
            @isset($editar)
                @method('PUT')
            @endisset --}}

            <input type="hidden" name="projetos_id" value="{{$sprint->id}}">
            <div class="container mt-3 col-md-8">
                <div class="form-group col-10">
                    {{-- campo para nome da tarefa --}}
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="Nometarefa" >Nome da tarefa</span>
                        <input value="{{ old('nome_projeto', $tarefa->nome) }}"  placeholder="Nome da tarefa"type="text"  name="nome_do_tarefa" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
                        {{-- <input value="{{ old('nome_tarefa', $tarefa->nome_tarefa) }}"  placeholder="Nome da tarefa"type="text"  name="nome_tarefa" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" /> --}}
                        </div>
                    {{-- fim da campo --}}
                    {{-- campo para nome da tarefa --}}
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="Nometarefa" >Descrição</span>
                        <input value="{{ old('nome_projeto', $tarefa->numero_tarefa) }}"  placeholder="Nome da tarefa"type="text"  name="nome_do_tarefa" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
                        {{-- <input value="{{ old('nome_tarefa', $tarefa->nome_tarefa) }}"  placeholder="Nome da tarefa"type="text"  name="nome_tarefa" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" /> --}}
                        </div>
                    {{-- fim da campo --}}
                    {{-- campo para nome da tarefa --}}
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="Nometarefa" >Nome da tarefa</span>
                        <input value="{{ old('nome_projeto', $tarefa->nome) }}"  placeholder="Nome da tarefa"type="text"  name="nome_do_tarefa" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
                        {{-- <input value="{{ old('nome_tarefa', $tarefa->nome_tarefa) }}"  placeholder="Nome da tarefa"type="text"  name="nome_tarefa" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" /> --}}
                        </div>
                    {{-- fim da campo --}}


                        <a class="mt-3 btn btn-danger" href={{ route('tarefas.edit', $tarefa) }}>Editar</a>
                    </div>
                </div>
            </div>

        </form>
        <form class="position-absolute" action="{{ route('tarefas.destroy', ['tarefa' => $tarefa]) }}" method="post">
            @csrf
            @method('DELETE')
            <button onclick="return confirm(
                'Ao criar nova tarefa, a atual será inativada e suas tarefas transferida para nova, deseja continuar?'
                )" class="mt-3 btn btn-danger" >Mover tarefa (não implementado)</button>
        </form>
    </div>



</x-style>
