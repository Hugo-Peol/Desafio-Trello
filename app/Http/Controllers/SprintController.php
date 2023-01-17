<?php

namespace App\Http\Controllers;

use App\Models\Sprint;
use Illuminate\Http\Request;
use App\Models\Projeto;

class SprintController extends Controller
{

    public function index()
    {
        return view('sprints.index');
    }

    public function create()
    {
        return view('sprints.create');
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Sprint $sprint)
    {
        return view('projetos.sprints.show', [
            'sprint' => $sprint
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sprint  $sprint
     * @return \Illuminate\Http\Response
     */
    public function edit(Sprint $sprint)
    {
        return view('projetos.sprints.edit')
        ->with([
            'sprint' => $sprint
        ]);
    }


    public function update(Request $request, Sprint $sprint)
    {

        $projeto = Projeto::find(1)->get()[0];
        $sprint->fill($request->all());

        $sprint->save();


        return to_route('projetos.sprints.index', $projeto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sprint  $sprint
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sprint $sprint)
    {

        $sprint->delete();

        return view('projetos.sprints.show');

        // return to_route('projetos.sprints.index')->with('mensagemSucesso', "Sprint '{$sprint->nome_do_sprint}' removida com sucesso!");
    }
}
