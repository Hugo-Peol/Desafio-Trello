<?php

namespace App\Http\Controllers;

use App\Models\SprintTarefa;
use Illuminate\Http\Request;
use App\Models\Sprint;
use App\Models\Projeto;
use App\Models\Tarefa;

class SprintTarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Projeto $projeto, Sprint $sprint)
    {

        // dd($sprint);

        // $sprint = $request->sprint;
        $tarefa = new Tarefa;
        return view('tarefas.create', ['tarefa' => $tarefa, 'sprint' => $sprint, 'projeto' => $projeto]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SprintTarefa  $sprintTarefa
     * @return \Illuminate\Http\Response
     */
    public function show(SprintTarefa $sprintTarefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SprintTarefa  $sprintTarefa
     * @return \Illuminate\Http\Response
     */
    public function edit(SprintTarefa $sprintTarefa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SprintTarefa  $sprintTarefa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SprintTarefa $sprintTarefa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SprintTarefa  $sprintTarefa
     * @return \Illuminate\Http\Response
     */
    public function destroy(SprintTarefa $sprintTarefa)
    {
        //
    }
}
