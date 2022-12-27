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
        Schema::table('tarefas', function (Blueprint $table) {
            $table->foreign(['sprints_id'], 'fk_Tarefas_Sprints1')->references(['id'])->on('sprints')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['projetos_usuarios_id'], 'fk_Tarefas_Projetos_usuarios1')->references(['id'])->on('projetos_usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['status_tarefa_id'], 'fk_Tarefas_Status_tarefa1')->references(['id'])->on('status_tarefa')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tarefas', function (Blueprint $table) {
            $table->dropForeign('fk_Tarefas_Sprints1');
            $table->dropForeign('fk_Tarefas_Projetos_usuarios1');
            $table->dropForeign('fk_Tarefas_Status_tarefa1');
        });
    }
};
