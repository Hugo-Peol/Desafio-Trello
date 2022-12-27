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
        Schema::table('projetos_usuarios', function (Blueprint $table) {
            $table->foreign(['usuários_id'], 'fk_table1_Usuários1')->references(['id'])->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['projetos_id'], 'fk_table1_Projetos1')->references(['id'])->on('projetos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projetos_usuarios', function (Blueprint $table) {
            $table->dropForeign('fk_table1_Usuários1');
            $table->dropForeign('fk_table1_Projetos1');
        });
    }
};
