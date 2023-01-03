<?php

namespace App\Http\Controllers;

use App\Models\ProjetoSprint;
use Illuminate\Http\Request;

class ProjetoSprintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        return view('sprints.index')->with('projeto', $request);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjetoSprint  $projetoSprint
     * @return \Illuminate\Http\Response
     */
    public function show(ProjetoSprint $projetoSprint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjetoSprint  $projetoSprint
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjetoSprint $projetoSprint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProjetoSprint  $projetoSprint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjetoSprint $projetoSprint)
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
        //
    }
}
