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
        Schema::table('subtarefas', function (Blueprint $table) {
            $table->foreign(['tarefas_id'], 'fk_SubTarefas_Tarefas1')->references(['id'])->on('tarefas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['status_sub_tarefa_id'], 'fk_SubTarefas_Status_sub_tarefa1')->references(['id'])->on('status_sub_tarefa')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subtarefas', function (Blueprint $table) {
            $table->dropForeign('fk_SubTarefas_Tarefas1');
            $table->dropForeign('fk_SubTarefas_Status_sub_tarefa1');
        });
    }
};
