<form action="{{route('projetos.store')}}" method="post">
@csrf
    <div class="container mt-3">
        <div class="form-group col-10">
            {{-- campo para nome do projeto --}}
            <div class="input-group mb-3">
                <span class="input-group-text" id="NomeProjeto" >Nome do Projeto</span>
                <input placeholder="Nome do Projeto"type="text" name="nome_projeto" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
              </div>
            {{-- fim do campo --}}
            {{-- campo para Descrição do projeto --}}
            <div class="input-group mb-3">
                <span class="input-group-text" id="DescricaoProjeto" >Descrição do Projeto</span>
                <input placeholder="Descrição do Projeto"type="text"  name="descricao" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
              </div>
            {{-- fim do campo --}}
            <div class="input-group mb-3">
                <span class="input-group-text" id="DescricaoProjeto" >Data de início</span>
                <input placeholder="Descrição do Projeto"type="date"  name="data_inicio" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
              </div>

            {{-- mais tarde um for each tipoDeProjetos pra cada um --}}
            <div class="container mt-2">
    
                <h5>Templates do Projeto</h5>
            {{-- checkboxs --}}
            <div class="form-check">
              <input class="form-check-input" name="templates_projeto" type="radio" value="SCRUM" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                SCRUM
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="templates_projeto" type="radio" value="KANBAN" id="flexCheckChecked" >
              <label class="form-check-label" for="flexCheckChecked">
                KANBAN 
              </label>
            </div>

              {{-- lista select --}}
    
              <div class="mt-2">
                <label for="" class="form-label">Tipo do Projeto:</label>
                <select class="form-select form-select-lg" name="tipo_projeto" id="TipoProjeto">
                    <option selected>Serviços</option>
                    <option value="">Software</option>
                </select>
              </div>
            <br>
          </div>
    </div>    
    

{{--  Botão enviar --}}
<button class="btn btn-primary" type="submit">Cadastrar</button>

</form>






