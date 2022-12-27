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
        Schema::create('subtarefas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 45)->nullable();
            $table->string('descricao', 45)->nullable();
            $table->unsignedBigInteger('tarefas_id');
            $table->unsignedBigInteger('status_sub_tarefa_id');

            // $table->primary(['id', 'tarefas_id', 'status_sub_tarefa_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subtarefas');
    }
};
