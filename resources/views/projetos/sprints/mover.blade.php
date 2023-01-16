
<x-style title="Mover Sprint">

</x-style>


<form action="{{ route('projetos.sprints.moverSprint', ['id' => $sprint->projetos[0]->id]) }}" method="post">

    @csrf
    @method("PUT")
    <input type="hidden" name="projetos_id" value="{{$projeto->id}}">
    <input type="hidden" name="sprint_id" value="{{$sprint->id}}">

        <div class="container mt-3 col-md-8">
            <div class="form-group col-10">
                {{-- campo para nome da sprint --}}
                <div class="input-group mb-3">
                    <span class="input-group-text" id="Nomesprint" >Nome da sprint</span>
                    <input  placeholder="Nome da sprint"type="text"  name="nome_do_sprint" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
                    {{-- <input value="{{ old('nome_sprint', $sprint->nome_sprint) }}"  placeholder="Nome da sprint"type="text"  name="nome_sprint" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" /> --}}
                  </div>
                {{-- fim do campo --}}
                {{-- ARRUMAR!! -> NÃO TA PASSANDO O VALUE PRO CAMPO --}}
                <div class="input-group mb-3">
                    <span class="input-group-text" id="Descricaosprint" >Data de início</span>
                    <input   placeholder ="Descrição da sprint" type="date"  name="data_inicio" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
                  </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="Descricaosprint" >Data de fim</span>
                    <input  placeholder="Descrição da sprint" type="date"  name="data_fim" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
                  </div>
                  <button class="btn btn-primary" type="submit">Mover </button>
                </div>
            </div>
        </div>


    </form>



