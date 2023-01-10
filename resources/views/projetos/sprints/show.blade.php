<x-style title="Ver Sprints">
    <div class="container mt-2 ">
        <form action="{{ route('sprints.destroy', ['sprint' => $sprint]) }}" method="post">
            @csrf
            @method('DELETE')
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{ route('projetos.sprints.create', $projeto->id) }}"  class="btn btn-success ">
                Criar nova sprint
                </a>

                {{-- <a href="{{ route('sprints.edit', ['projeto' => $projeto, 'sprint' => $sprint]) }}" class="btn btn-primary">
                    Editar Sprint
                </a> --}}
                <a href="{{ route('sprints.show', ['sprint' => $sprint]) }}" class="btn btn-primary">
                    Editar Sprint
                </a>
                <button
                    onclick="return confirm('Ao criar nova Sprint, a atual será inativada e suas tarefas transferida para nova, deseja continuar?')" type="submit" class="btn btn-danger">Deletar Sprint
                </button>
            </div>
        </form>
    </div>

{{-- grid dos status das tarefas --}}

<div class="m-5 text-center bg-dark h-100">
    <div class="row align-items-start p-1" style="height: 60vh">
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
