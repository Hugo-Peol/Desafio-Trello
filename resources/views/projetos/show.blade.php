<x-style title="Projeto - {{ $projeto->nome_projeto }}">

<div class="container mt-5">

    <div class="row mt-4">
        <div class="col-md-2">Nome do projeto:</div>
        <div class="col-md-2">{{$projeto->nome_projeto}}</div>
        {{-- <div class="col-md-1"><a href="http://">Editar</a></div> --}}
      </div>
      <div class="row mt-4">
        <div class="col-md-2">Descrição:</div>
        <div class="col-md-2">{{$projeto->descricao}}</div>
        {{-- <div class="col-md-1"><a href="http://">Editar</a></div> --}}
      </div>
      <div class="row mt-4">
        <div class="col-md-2">Template do projeto</div>
        <div class="col-md-2">{{$projeto->templates_projeto}}</div>
        {{-- <div class="col-md-1"><a href="http://">Editar</a></div> --}}
      </div>
      <div class="row mt-4">
        <div class="col-md-2">Data de criação</div>
        <div class="col-md-2">{{$projeto->created_at}}</div>
      </div>
    <a href={{ route('projetos.edit', $projeto->id) }}><button class="mt-3 btn btn-danger">
        Editar
    </button></a>
    <form action="{{ route('projetos.destroy', ['projeto' => $projeto]) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="mt-3 btn btn-danger" >Deletar</button>
    </form>
    

</div>
 

    
    </x-style>