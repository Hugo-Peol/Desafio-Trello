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
            $table->string('nome_projeto', 45);
            $table->string('tipo_projeto', 100)->comment('Serve para indicar se é software,servico etc');
            $table->string('descricao', 200);
            $table->date('data_inicio');
            $table->string('templates_projeto', 45);
            $table->timestamps();

        });

        //adicionar tabela usuários

        //adicionar relacionamento com a tabela projetos_tem_sprints (muitos p/ muitos)
        Schema::create('projetos_sprints', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('projeto_id');
            $table->unsignedBigInteger('sprint_id');
             //foreign key (constraints)

        });


        //adicionar relacionamento com a tabela projetos_usuarios (muitos p/ muitos)

        Schema::create('projetos_usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('projeto_id');
            $table->unsignedBigInteger('usuario_id');
            $table->timestamps();




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
        Schema::dropIfExists('projetos_sprints');
        Schema::dropIfExists('projetos_usuarios');

    }
};
