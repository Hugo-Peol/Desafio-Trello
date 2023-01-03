<x-style title="Sprints" >
              {{-- lista select --}}  
<div class="mt-2">
  <label for="" class="form-label">Selecione a sprint:</label>
  <select class="form-select form-select-lg" name="tipo_projeto" id="TipoProjeto">
      <option selected>1</option>
      <option value="">2</option>
  </select>
</div>
<br>
</div>


<div class="container mt-2">
    <a href="{{ route('projetos.sprints.create', $projeto->id) }}">
        <button type="button" class="btn btn-primary">Criar nova sprint</button>
    </a>


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