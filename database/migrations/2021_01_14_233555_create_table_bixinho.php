<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBixinho extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_bixinho', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('apelido');
            $table->integer('tipo_id');
            $table->string('bairro');
            $table->string('telefone_contato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_bixinho');
    }
}
