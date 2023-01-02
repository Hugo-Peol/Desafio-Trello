<x-style title="Sprints" >
              {{-- lista select --}}  
              <div class="mt-2">
                <label for="" class="form-label">Selecione o projeto:</label>
                <select class="form-select form-select-lg" name="tipo_projeto" id="TipoProjeto">
                    <option selected>p1</option>
                    <option value="">p2</option>
                </select>
              </div>
            <br>
          </div>
{{-- {{-- fazer algo que deixe ativo um projeto// botar na nav qual  q esta ativo -- ou seleciona na lista e ja aparece}} --}}
{{-- cadastrar sprint --}}

<div class="container mt-2">
    <a href="{{ route('sprints.create') }}">
        <button type="button" class="btn btn-primary">Criar nova sprint</button>
    </a>

    {{-- <a href="{{ route('projetos.show') }}">
        <button type="button" class="btn btn-primary">Ver Projetos</button>
    </a> --}}
</div>
{{--(FIM) cadastrar sprint --}}

{{-- grid dos status das tarefas --}}

<div class="m-5 text-center bg-dark h-100">
  <div class="row align-items-start p-1" style="height: 65vh">
    <div class="col h-100">
      <x-card-column>

      </x-card-column>
    </div>
    <div class="col h-100">
      <x-card-column>
        
      </x-card-column>
    </div>
    <div class="col h-100">
      <x-card-column>
        
      </x-card-column>
    </div>
    <div class="col h-100">
      <x-card-column>

      </x-card-column>
    </div>
    <div class="col h-100">
      <x-card-column>
        
      </x-card-column>
    </div>
    <div class="col h-100">
      <x-card-column>
        
      </x-card-column>
    </div>
    <div class="col h-100">
      <x-card-column>

      </x-card-column>
    </div>
    <div class="col h-100">
      <x-card-column>
        
      </x-card-column>
    </div>
    <div class="col h-100">
      <x-card-column>
        
      </x-card-column>
    </div>
  </div>
</div>

{{--(FIM) grid dos status das tarefas --}}

</x-style>