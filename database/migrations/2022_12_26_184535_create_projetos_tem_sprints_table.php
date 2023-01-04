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
        Schema::create('projetos_tem_sprints', function (Blueprint $table) {
            $table->unsignedBigInteger('projeto_id');
            $table->unsignedBigInteger('sprint_id');

            // $table->primary(['projetos_id', 'sprints_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projetos_tem_sprints');
    }
};
