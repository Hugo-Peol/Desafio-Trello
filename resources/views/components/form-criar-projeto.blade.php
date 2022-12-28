<form action="{{route('projetos.store')}}" method="post">
@csrf
    <div class="container mt-3">
        <div class="form-group col-10">
            {{-- campo para nome do projeto --}}
            <div class="input-group mb-3">
                <span class="input-group-text" id="NomeProjeto" >Nome do Projeto</span>
                <input placeholder="Nome do Projeto"type="text" name="NomeProjeto" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
              </div>
            {{-- fim do campo --}}
            {{-- campo para Descrição do projeto --}}
            <div class="input-group mb-3">
                <span class="input-group-text" id="DescricaoProjeto" >Descrição do Projeto</span>
                <input placeholder="Descrição do Projeto"type="text"  name="DescricaoProjeto" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
              </div>
            {{-- fim do campo --}}
            {{-- mais tarde um for each tipoDeProjetos pra cada um --}}
            <div class="container mt-2">
    
                <h5>Templates do Projeto</h5>
            {{-- checkboxs --}}
            <div class="d-inline">

                <div class="form-check d-inline">
                    <input class="form-check-input" type="radio" value="Variavel2" name="TemplateProjeto" id="TemplateProjeto" />
                    <label class="form-check-label" for="TemplateProjeto">Scrum</label>
                  </div>
                  
                  {{--  checkbox marcada --}}
                  <div class="form-check d-inline">
                    <input class="form-check-input" type="radio" value="Variavel1" name="TemplateProjeto" id="TemplateProjeto1" checked/>
                    <label class="form-check-label" for="TemplateProjeto">Kanban</label>
                  </div>
                </div>

            </div>
   
              {{-- lista select --}}
    
              <div class="mt-2">
                <label for="" class="form-label">Tipo do Projeto:</label>
                <select class="form-select form-select-lg" name="TipoProjeto" id="TipoProjeto">
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






