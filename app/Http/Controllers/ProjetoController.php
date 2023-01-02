<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;
use App\Http\Requests\ProjetoFormRequest;



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

        return view('projetos.index')->with('projetos', $projetos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projeto = new Projeto;


        $mensagemSucesso = session('mensagem.sucesso');
        return view('projetos.create', [
            'projeto' => $projeto, 
            'mensagemSucesso', $mensagemSucesso
            ]);
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

        return to_route('projetos.create')
        ->with('mensagem.sucesso', "Projeto '{$request->nome_projeto}' criado com sucesso!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function show(Projeto $projeto)
    {


        return view('projetos.show', $projeto )->with('projeto', $projeto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function edit(Projeto $projeto)
    {
     
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

        return to_route('projetos.index')->with('mensagem.sucesso', "Projeto '{$projeto->nome_projeto}' atualizado com sucesso!");
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
            ->with('mensagem.sucesso', "Projeto '{$projeto->nome_projeto}' removido com sucesso!");
    }
}
