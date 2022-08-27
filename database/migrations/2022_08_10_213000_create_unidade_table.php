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
        Schema::create('unidade', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5); //cm, mm, kg 
            $table->string('descricao', 30);
            $table->timestamps();

            //adicionar o relacionamento coma  tabela produtos

            Schema::table('produtos', function(Blueprint $table){
                $table->unsignedBigInteger('unidade_id');
                $table->foreign('unidade_id')->references('id')->on('unidades');
            });

            // adicionar o relacionamento com produto_detalhes 

            Schema::table('produto_detalhes', function(Blueprint $table){
                $table->unsignedBigInteger('unidade_id');
                $table->foreign('unidade_id')->references('id')->on('unidades');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidade');
    }
};
