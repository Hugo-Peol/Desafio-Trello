<x-style title="Editar projeto - {{ $projeto->nome_projeto }}">

<x-form-criar-projeto :projeto=$projeto action="{{route('projetos.update', $projeto->id)}}" editar=1>


</x-form-criar-projeto>



</x-style>