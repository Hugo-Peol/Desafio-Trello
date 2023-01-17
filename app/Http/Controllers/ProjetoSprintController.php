<?php

namespace App\Http\Controllers;

use App\Models\ProjetoSprint;
use Illuminate\Http\Request;
use App\Models\Projeto;
use App\Models\Sprint;


class ProjetoSprintController extends Controller
{

    public function index(Sprint $sprint, Projeto $projeto, Request $request)
    {


        // pega a ultima sprint ativa e tetorna (antiga forma de mostrar o numero da sprint)
        $sprint =  Sprint::latest()->where('sprint_ativo', 1)->first();

        //pega o numero de sprints e mostra em qual que está (não precisa ser ativo pq conta quantas
        // tem e o número da sprint é sempre a quantidade existente, visto que não se apaga sprint e sim inativa)
        $numSprint =  $projeto->sprints()->count();

        // passa mensagem sucesso para a view, não pode ser null se não quebra a página
        $mensagemSucesso = session('mensagemSucesso') ?? null;


        return view('projetos.sprints.index')->with('projeto', $projeto)
        ->with('mensagemSucesso', $mensagemSucesso)
        ->with('sprint', $sprint)->with('numSprint', $numSprint);

    }


    public function create(Projeto $projeto)
    {
        // chego aqui através do formulário create(view)
        // se não tiver formulário criado tem q ser tratado diferente

        $sprint = new Sprint;

        return view('projetos.sprints.create')->with('projeto', $projeto)->with('sprint', $sprint);
    }


    public function store($projeto, Request $request)
    {

        // pega o projeto da view
        $projeto = Projeto::find($projeto);
        // cria a sprint usando o relacionamento sprints()
        $sprint = $projeto->sprints()->create($request->all());

        return to_route('projetos.sprints.index', $projeto)
        ->with('mensagemSucesso', "Sprint '{$request->nome_do_sprint}' criada com sucesso!");
    }

    public function mover( Projeto $projeto, Sprint $sprint)
    {
        // Salva os dados na sessão para passar para a próxima função
        session(['sprint' => $sprint, 'projetos' => $projeto]);


        return view('projetos.sprints.mover');
    }

    public function moverSprint(Request $request, Projeto $projeto, Sprint $sprint)
    {

        $sprint_antiga = session('sprint');

        // Seta o campo sprint_ativo como 0
        $sprint_antiga->sprint_ativo = 0;

        //Salva a alteração no banco
        $sprint_antiga->save();

        // Validação e criação de nova sprint
        $sprint = new Sprint();
        $sprint->data_inicio = $request->data_inicio;
        $sprint->nome_do_sprint = $request->nome_do_sprint;
        $sprint->data_fim = $request->data_fim;
        $sprint->save();

        // Adicionando a sprint ao projeto
        $projeto = Projeto::find($request->projeto_id);

        // Relacionando ao projeto
        $projeto->sprints()->attach($sprint);

        return redirect()->route('projetos.sprints.index', [
            'projeto' => $projeto,
            'sprint' => $sprint
        ])->with('mensagemSucesso', 'Sprint criada e relacionada com sucesso ao projeto!');
    }
}
