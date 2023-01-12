<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;
use App\Http\Requests\ProjetoFormRequest;
use App\Models\Sprint;



class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projetos = Projeto::all();
        $mensagemSucesso = session('mensagemSucesso') ?? null;


        return view('projetos.index')->with('projetos', $projetos)->with('mensagemSucesso', $mensagemSucesso);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projeto = new Projeto;

        // GAMBIARRA
        $haveSprint = Sprint::first();







        $mensagemSucesso = session('mensagemSucesso');
        return view('projetos.create', [
            'projeto' => $projeto])->with('mensagemSucesso', $mensagemSucesso);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjetoFormRequest $request)
    {


        Projeto::create($request->all());

        return to_route('projetos.index')
        ->with('mensagemSucesso', "Projeto '{$request->nome_projeto}' criado com sucesso!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function show(Projeto $projeto)
    {
       $sprint = $projeto->sprint;
        // GAMBIARRA
        $haveSprint = Sprint::first();

        return view('projetos.show', $projeto )
        ->with('projeto', $projeto)->with('sprint', $sprint)->with('haveSprint', $haveSprint);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function edit(Projeto $projeto)
    {
            // dd($projeto->sprints); trás somente as sprints vinculadas, sem o projeto em si
            // dd($projeto->with('sprints')->get()); trás o projeto e todas as sprints vinculadasout

        return view('projetos.edit')->with('projeto', $projeto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function update(ProjetoFormRequest $request, Projeto $projeto)
    {

        $projeto->fill($request->all());

        $projeto->save();

        return to_route('projetos.index')->with('mensagemSucesso', "Projeto '{$projeto->nome_projeto}' atualizado com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projeto $projeto)
    {

        $projeto->delete();

        return to_route('projetos.index')
            ->with('mensagemSucesso', "Projeto '{$projeto->nome_projeto}' removido com sucesso!");
    }
}
