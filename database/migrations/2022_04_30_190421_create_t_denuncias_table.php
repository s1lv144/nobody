<?php

use App\Models\status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDenunciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_denuncias', function (Blueprint $table) {
            $table->id();
            $table->string('telefono');
          
            $table->string('relato');
            $table->string('titulo');
            $table->unsignedBigInteger('tipodelito_id');
            $table->unsignedBigInteger('delito_id');
            $table->unsignedBigInteger('tipodenuncia_id');
            $table->unsignedBigInteger('tipoinfo_id');
            $table->enum('status', [status::ACTIVO, status::INACTIVO])->default(status::ACTIVO);

           

            $table->foreign('tipodenuncia_id')
                ->references('id')
                ->on('c_catalogos')
                ->onDelete('cascade');

            $table->foreign('tipoinfo_id')
                ->references('id')
                ->on('c_catalogos')
                ->onDelete('cascade');    
            
            $table->foreign('tipodelito_id')
                ->references('id')
                ->on('c_catalogos')
                ->onDelete('cascade'); 
                
            $table->foreign('delito_id')
                ->references('id')
                ->on('c_catalogos')
                ->onDelete('cascade');        

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          
            $table->unsignedBigInteger('t_lugarhechos_id');
            $table->foreign('t_lugarhechos_id')->references('id')->on('t_lugarhechos')->onDelete('cascade');

            $table->unsignedBigInteger('t_personas_id');
            $table->foreign('t_personas_id')->references('id')->on('t_personas')->onDelete('cascade');

          
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
        Schema::dropIfExists('t_denuncias');
    }
}
