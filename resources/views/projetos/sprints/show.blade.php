<x-style title="Sprints ">



    <div class="container d-inline ">
        <form class="d-inline" col-md-9 action="" method="post">
            @csrf
            @isset($editar)
                @method('PUT')
            @endisset

            <input type="hidden" name="projetos_id" value="{{$sprint->id}}">
            <div class="container mt-3 col-md-8">
                <div class="form-group col-10">
                    {{-- campo para nome da sprint --}}
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="Nomesprint" >Nome da sprint</span>
                        <input value="{{ old('nome_projeto', $sprint->nome_do_sprint) }}"  placeholder="Nome da sprint"type="text"  name="nome_do_sprint" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
                        {{-- <input value="{{ old('nome_sprint', $sprint->nome_sprint) }}"  placeholder="Nome da sprint"type="text"  name="nome_sprint" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" /> --}}
                        </div>
                    {{-- fim da campo --}}

                    {{-- fim da campo --}}
                    {{-- ARRUMAR!! -> NÃO TA PASSANDO O VALUE PRO CAMPO --}}
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="Descricaosprint" >Data de início</span>
                        <input value="{{old('data_inicio', \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$sprint->data_inicio)->format('Y-m-d'))}}"  placeholder ="Descrição da sprint" type="date"  name="data_inicio" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
                        </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="Descricaosprint" >Data de fim</span>
                        <input value="{{old('data_fim', \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$sprint->data_fim)->format('Y-m-d'))}}" placeholder="Descrição da sprint" type="date"  name="data_fim" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
                        </div>

                        <a class="mt-3 btn btn-danger" href={{ route('sprints.edit', $sprint) }}>Editar</a>
                    </div>
                </div>
            </div>

        </form>
        <form class="position-absolute" action="{{ route('sprints.destroy', ['sprint' => $sprint]) }}" method="post">
            @csrf
            @method('PUT')
            <button onclick="return confirm(
                'Ao criar nova Sprint, a atual será inativada e suas tarefas transferida para nova, deseja continuar?'
                )" class="mt-3 btn btn-danger" >Mover Sprint (não implementado)</button>
        </form>
    </div>


</x-style>



