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
        Schema::create('mensagens', function (Blueprint $table) {
            $table->id();
            $table->string('numero_usuario', 45)->nullable();
            $table->unsignedBigInteger('usuarios_id');
            $table->unsignedBigInteger('tarefas_id');
            // $table->unsignedBigInteger('tarefas_sprints_id');
            // $table->unsignedBigInteger('tarefas_status_tarefa_id');
            // $table->unsignedBigInteger('tarefas_projetos_usuarios_id');

            // $table->primary(['id', 'usuários_id', 'tarefas_id', 'tarefas_sprints_id', 'tarefas_status_tarefa_id', 'tarefas_projetos_usuarios_id']);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensagens');
    }
};
