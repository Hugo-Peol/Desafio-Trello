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
        Schema::create('tarefas', function (Blueprint $table) {

            $table->id();
            $table->string('nome', 45);
            $table->string('descricao', 45);
            $table->unsignedBigInteger('sprints_id');
            $table->unsignedBigInteger('status_tarefa_id');
            $table->unsignedBigInteger('projetos_usuarios_id');
            $table->unsignedBigInteger('numero_tarefa');
            $table->string('titulo_tarefa', 200);
            $table->string('numero_sprint', 45);
            $table->string('comentario_tarefa', 200);
            $table->timestamps();

            
            // $table->primary(['id', 'sprints_id', 'status_tarefa_id', 'projetos_usuarios_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarefas');
    }
};
