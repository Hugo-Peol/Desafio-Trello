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
        Schema::create('projetos_usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('projetos_id');
            $table->unsignedBigInteger('usuários_id');

            // $table->primary(['id', 'projetos_id', 'usuários_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projetos_usuarios');
    }
};
