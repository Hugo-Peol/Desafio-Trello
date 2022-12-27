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
        Schema::create('projetos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_projeto', 45)->nullable();
            $table->timestamp('data_criacao'); 
            $table->string('tipo_projeto', 100)->nullable()->comment('Serve para indicar se é software,servico etc');
            $table->string('descricao', 200)->nullable();
            $table->timestamp('data_inicio')->nullable(); 
            $table->string('templates_projeto', 45)->nullable();

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projetos');
    }
};
