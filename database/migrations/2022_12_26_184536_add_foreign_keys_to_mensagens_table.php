<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mensagens', function (Blueprint $table) {
            
            
            $table->foreign('usuarios_id')->references('id')->on('usuarios');
            $table->foreign('tarefas_id')->references('id')->on('tarefas');
            // $table->foreign('tarefas_sprints_id')->references('id')->on('tarefas_sprints');
            // $table->foreign('tarefas_status_tarefa_id')->references('id')->on('taferas_status_tarefa');
            // $table->foreign('tarefas_projetos_usuarios_id')->references('id')->on('tarefas_projetos_usuario');

            // $table->foreignId('usuarios_id')->constrained();
            // $table->foreignId('tarefas_id')->constrained();
            // $table->foreignId('tarefas_sprints_id')->constrained('tarefas_sprints');
            // $table->foreignId('tarefas_status_tarefa_id')->constrained('taferas_status_tarefa');
            // $table->foreignId('tarefas_projetos_usuarios_id')->constrained('tarefas_projetos_usuario');

            

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mensagens', function (Blueprint $table) {
            $table->dropForeign('fk_Mensagens_Tarefas1');
            $table->dropForeign('fk_Mensagens_Usuários1');
        });
    }
};
