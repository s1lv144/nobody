<?php

use App\Models\t_asignacione;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('edad');
            $table->string('comentario');
            $table->string('dui')->nullable();;
            $table->string('alias');
            $table->string('clave');
            $table->string('otraorg');
            $table->unsignedBigInteger('genero_id');
            $table->unsignedBigInteger('rol_id');
            $table->unsignedBigInteger('organizacion_id');
            $table->unsignedBigInteger('pandilla_id');
            $table->enum('status', [t_asignacione::PENDIENTE, t_asignacione::RECIBIDA])->default(t_asignacione::PENDIENTE);
            

            $table->foreign('genero_id')
            ->references('id')
            ->on('c_catalogos')
            ->onDelete('cascade');   
            
            $table->foreign('rol_id')
            ->references('id')
            ->on('c_catalogos')
            ->onDelete('cascade'); 
            
            $table->foreign('organizacion_id')
            ->references('id')
            ->on('c_catalogos')
            ->onDelete('cascade');   

            $table->foreign('pandilla_id')
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
        Schema::dropIfExists('t_personas');
    }
}
