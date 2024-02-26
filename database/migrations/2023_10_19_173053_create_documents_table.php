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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('empresa');
            $table->string('rif');
            $table->string('direccion');
            $table->string('fecha_documento');
            $table->string('nro_hoja');
            $table->string('fecha_contrato');
            $table->string('nro_contrato');
            $table->string('n_registro_user');
            $table->string('tipo_aprov');
            $table->string('nro_aprov');
            $table->string('uso');
            $table->string('utm');
            $table->string('region_hidrogafica');
            $table->string('caudal');
            $table->json('extras')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('documents');
    }
};
