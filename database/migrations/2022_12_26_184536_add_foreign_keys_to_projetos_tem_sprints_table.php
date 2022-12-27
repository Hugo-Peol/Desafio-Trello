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
        Schema::table('projetos_tem_sprints', function (Blueprint $table) {
            $table->foreign(['sprints_id'], 'fk_Projetos_has_Sprints_Sprints1')->references(['id'])->on('sprints')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['projetos_id'], 'fk_Projetos_has_Sprints_Projetos')->references(['id'])->on('projetos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projetos_tem_sprints', function (Blueprint $table) {
            $table->dropForeign('fk_Projetos_has_Sprints_Sprints1');
            $table->dropForeign('fk_Projetos_has_Sprints_Projetos');
        });
    }
};
