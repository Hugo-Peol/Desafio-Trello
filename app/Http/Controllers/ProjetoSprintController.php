<?php

namespace App\Http\Controllers;

use App\Models\ProjetoSprint;
use Illuminate\Http\Request;
use App\Models\Projeto;
use App\Models\Sprint;
use PhpParser\Node\Expr\Cast\Object_;

class ProjetoSprintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Projeto $projeto)
    {
        // chego aqui através do formulário create(view)
        // se não tiver formulário criado tem q ser tratado diferente

        $sprint = new Sprint;

        return view('projetos.sprints.create')->with('projeto', $projeto)->with('sprint', $sprint);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($projeto, Request $request)
    {

        // pega o projeto da view
        $projeto = Projeto::find($projeto);
        // cria a sprint usando o relacionamento sprints()
        $sprint = $projeto->sprints()->create($request->all());




        return to_route('projetos.sprints.index', $projeto)
        ->with('mensagemSucesso', "Sprint '{$request->nome_do_sprint}' criada com sucesso!");
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjetoSprint  $projetoSprint
     * @return \Illuminate\Http\Response
     */
    public function edit(Projeto $projeto, Sprint $sprint)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProjetoSprint  $projetoSprint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projeto $projeto, Sprint $sprint)
    {

      //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjetoSprint  $projetoSprint
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjetoSprint $projetoSprint)
    {


    }

    public function moverSprint(Request $request, $projeto){
         // --- chego aqui através do botal
        // preciso selecionar a ultima sprint

        $sprintAntiga =  Sprint::latest()->where('sprint_ativo', 1)->first();

        // e colocar como inativa

        $sprintAntiga->update(array('sprint_ativo' => 0));

        // apos isso, criar nova sprint com os dados passados no request
        Sprint::create($request->all());



        return to_route('projetos.sprints.index', $projeto)
        ->with('mensagemSucesso', "Sprint '{$request->nome_do_sprint}' criada com sucesso!");
        // pegar as tarefas da sprint anterior e passar para a nova
        // $tarefas->replicate(); $novaTarefa->save();
        // devolver a sprint atual
    }
}
