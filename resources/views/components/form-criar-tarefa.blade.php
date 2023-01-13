<form action="{{ $acao }}" method="post">
@csrf
@isset($editar)
  @method('PUT')
@endisset
    {{-- o "?" é Optional properties, recurso que já existia no laravel e que entrou no php 8 como null safe operator --}}
    @isset($sprint->projetos[0]?->id)
        <input type="hidden" name="projetos_id" value="{{$sprint->projetos[0]->id}}">
    @endisset
    <div class="container mt-3 col-md-8">
        <div class="form-group col-10">
            {{-- campo para nome da sprint --}}
            <div class="input-group mb-3">
                <span class="input-group-text" id="Nomesprint" >Nome da sprint</span>
                <input value="{{ old('nome_projeto', $sprint->nome_do_sprint) }}"  placeholder="Nome da sprint"type="text"  name="nome_do_sprint" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
                {{-- <input value="{{ old('nome_sprint', $sprint->nome_sprint) }}"  placeholder="Nome da sprint"type="text"  name="nome_sprint" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" /> --}}
              </div>
            {{-- fim do campo --}}




            {{-- ARRUMAR!! -> NÃO TA PASSANDO O VALUE PRO CAMPO --}}
            <div class="input-group mb-3">
                <span class="input-group-text" id="Descricaosprint" >Data de início</span>
                <input value="{{ isset($editar) ? old('data_inicio', \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$sprint->data_inicio)->format('Y-m-d')) : '' }}"  placeholder ="Descrição da sprint" type="date"  name="data_inicio" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
              </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="Descricaosprint" >Data de fim</span>
                <input value="{{isset($editar) ? old('data_fim', \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$sprint->data_fim)->format('Y-m-d')) : ''}}" placeholder="Descrição da sprint" type="date"  name="data_fim" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
              </div>

            {{-- <div class="input-group mb-3">
                <span class="input-group-text" id="Descricaosprint" >Data de início</span>
                <input  @isset($sprint->data_inicio)
                value="{{ $sprint->data_inicio }}"

                @endisset placeholder="Descrição da sprint"type="date"  name="data_inicio" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
              </div> --}}
              <button class="btn btn-primary" type="submit">Salvar </button>
            </div>
        </div>
    </div>


</form>












