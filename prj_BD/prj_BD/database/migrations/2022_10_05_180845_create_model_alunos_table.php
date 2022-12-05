<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Aluno', function (Blueprint $table) {
            $table->increments('cd_rm_aluno');//id da tabela (chave primária e auto incremento)
            $table->string('nm_aluno');//nome do aluno
            $table->string('nm_mae_aluno');//nome mãe do aluno
            $table->string('nm_pai_aluno');//nome pai do aluno
            $table->timestamps();//cria colunas para registro da data de criação e última atualização
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Aluno');
    }
}
