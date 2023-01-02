<x-style title="Sprints">


{{-- variavel com nome do projeto --}}
<h1>selecione o projeto:</h1>

              {{-- lista select --}}
    
              <div class="mt-2">
                <label for="" class="form-label">Tipo do Projeto:</label>
                <select class="form-select form-select-lg" name="tipo_projeto" id="TipoProjeto">
                    <option selected>p1</option>
                    <option value="">p2</option>
                </select>
              </div>
            <br>
          </div>
{{-- {{-- fazer algo que deixe ativo um projeto// botar na nav qual  q esta ativo -- ou seleciona na lista e ja aparece}} --}}



formulario que mostra as spritns
<h1>numero da sprint</h1>

<h1>data de inicio da sprint</h1>

cadastrar sprint


<div class="container mt-5">
    <a href="{{ route('sprints.create') }}">
        <button type="button" class="btn btn-primary">Criar nova sprint</button>
    </a>

    {{-- <a href="{{ route('projetos.show') }}">
        <button type="button" class="btn btn-primary">Ver Projetos</button>
    </a> --}}
</div>


</x-style>