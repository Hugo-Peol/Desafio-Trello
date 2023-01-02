<form action="{{ '$action' }}" method="post">
@csrf
@isset($editar)
  @method('PUT')
@endisset
    <div class="container mt-3">
        <div class="form-group col-10">
            {{-- campo para nome da sprint --}}
            <div class="input-group mb-3">
                <span class="input-group-text" id="Nomesprint" >Nome da sprint</span>
                <input value=""  placeholder="Nome da sprint"type="text"  name="nome_sprint" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
                {{-- <input value="{{ old('nome_sprint', $sprint->nome_sprint) }}"  placeholder="Nome da sprint"type="text"  name="nome_sprint" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" /> --}}
              </div>
            {{-- fim da campo --}}
            {{-- campo para Descrição da sprint --}}
            <div class="input-group mb-3">
                <span class="input-group-text" id="Descricaosprint" >Descrição da sprint</span>
                <input placeholder="Descrição da sprint"type="text"  name="descricao" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
              </div>
            {{-- <div class="input-group mb-3">
                <span class="input-group-text" id="Descricaosprint" >Descrição da sprint</span>
                <input @isset($sprint->descricao)

                  value="{{ $sprint->descricao }}"
                  
                @endisset placeholder="Descrição da sprint"type="text"  name="descricao" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
              </div> --}}
            {{-- fim da campo --}}
            <div class="input-group mb-3">
                <span class="input-group-text" id="Descricaosprint" >Data de início</span>
                <input   placeholder="Descrição da sprint"type="date"  name="data_inicio" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
              </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="Descricaosprint" >Data de fim</span>
                <input   placeholder="Descrição da sprint"type="date"  name="data_inicio" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
              </div>
            {{-- <div class="input-group mb-3">
                <span class="input-group-text" id="Descricaosprint" >Data de início</span>
                <input  @isset($sprint->data_inicio)
                value="{{ $sprint->data_inicio }}"
                  
                @endisset placeholder="Descrição da sprint"type="date"  name="data_inicio" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
              </div> --}}



    

{{--  Botão enviar --}}
<button class="btn btn-primary" type="submit">Cadastrar</button>

</form>






