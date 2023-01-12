<x-style>

    <div class="container mt-5">
        <form action="{{ route('sprints.destroy', ['sprint' => $sprint]) }}" method="post">
            <div class="row mt-4">
                <div class="col-md-2">Nome da sprint:</div>
                <div class="col-md-2">{{$sprint->nome_do_sprint}}</div>
                {{-- <div class="col-md-1"><a href="http://">Editar</a></div> --}}
            </div>

            <div class="row mt-4">
                <div class="col-md-2">Data de início</div>
                <div class="col-md-2">{{$sprint->data_inicio}}</div>
            </div>
            <div class="row mt-4">
                <div class="col-md-2">Data final</div>
                <div class="col-md-2">{{$sprint->data_fim}}</div>
            </div>


                @csrf
                @method('DELETE')
                <button class="mt-3 btn btn-danger" >Salvar</button>
        </form>
    </div>


</x-style>
