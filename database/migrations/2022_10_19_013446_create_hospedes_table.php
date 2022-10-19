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
        Schema::create('hospedes', function (Blueprint $table) {
            $table->bigIncrements('id_hospede');
            $table->string('nome', 100)->nullable();
            $table->string('telefone', 20)->nullable();
            $table->string('profissao', 50)->nullable();
            $table->string('nacionalidade', 50)->nullable();
            $table->date('data_nascimento', 10)->nullable();
            $table->string('genero', 1)->nullable();
            $table->string('tipo_documento', 1)->nullable();
            $table->string('numero_documento', 30)->nullable();
            $table->string('cpf', 30)->nullable();
            $table->string('cidade', 30)->nullable();
            $table->string('uf', 30)->nullable();
            $table->string('endereco', 100)->nullable();
            $table->string('email', 30)->nullable();
            $table->timestamp('data_registro')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospedes');
    }
};
