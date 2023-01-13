<x-style title="Tarefas">


    <div class="row mt-4">
        <h5 class="card-title"><a href="{{route('tarefas.index')}}" class="text-title">tarefa 1</a></h5>
        <div class="col-md-2">nome</div>
        {{-- <div class="col-md-1"><a href="http://">Editar</a></div> --}}
      </div>
    <div class="row mt-4">
        <div class="col-md-2">Nome do projeto:</div>
        <div class="col-md-2">nome</div>
        {{-- <div class="col-md-1"><a href="http://">Editar</a></div> --}}
      </div>
      <div class="row mt-4">
        <div class="col-md-2">Descrição:</div>
        <div class="col-md-2">desc</div>
        {{-- <div class="col-md-1"><a href="http://">Editar</a></div> --}}
      </div>
      <div class="row mt-4">
        <div class="col-md-2">Template do projeto</div>
        <div class="col-md-2">templ</div>
        {{-- <div class="col-md-1"><a href="http://">Editar</a></div> --}}
      </div>

    <a href={{ route('tarefas.edit', ['sprint' => $sprint, 'tarefa' => $tarefa]) }}><button class="mt-3 btn btn-danger">
        Editar
    </button></a>
    {{-- <form action="{{ route('projetos.destroy', ['projeto' => $projeto]) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="mt-3 btn btn-danger" >Deletar</button>
    </form>
    <a href="{{ route('projetos.sprints.index', ['projeto' => $projeto, 'sprint' => $sprint]) }}">
        <button class="btn btn-success mt-2" >Sprint</button>
    </a> --}}




</x-style>
