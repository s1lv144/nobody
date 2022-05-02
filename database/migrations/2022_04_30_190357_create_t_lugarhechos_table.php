<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTLugarhechosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_lugarhechos', function (Blueprint $table) {
            $table->id();
           
            $table->string('comunidad');
            $table->string('complementodir');
            $table->string('latitud');
            $table->string('longitud');
            $table->string('coduniorg');

            $table->unsignedBigInteger('municipio_id');
            $table->unsignedBigInteger('departamento_id');
            $table->unsignedBigInteger('canton_id');
            

            $table->foreign('municipio_id')
            ->references('id')
            ->on('c_catalogos')
            ->onDelete('cascade');      

            $table->foreign('departamento_id')
            ->references('id')
            ->on('c_catalogos')
            ->onDelete('cascade'); 
            
            $table->foreign('canton_id')
            ->references('id')
            ->on('c_catalogos')
            ->onDelete('cascade'); 





          
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
        Schema::dropIfExists('t_lugarhechos');
    }
}
