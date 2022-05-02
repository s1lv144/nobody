<?php

use App\Models\status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTResultadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_resultados', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
           

            $table->unsignedBigInteger('t_patrullas_id');
            $table->foreign('t_patrullas_id')->references('id')->on('t_patrullas')->onDelete('cascade');


            $table->unsignedBigInteger('t_lugarhechos_id');
            $table->foreign('t_lugarhechos_id')->references('id')->on('t_lugarhechos')->onDelete('cascade');

            $table->unsignedBigInteger('t_asignaciones_id');
            $table->foreign('t_asignaciones_id')->references('id')->on('t_asignaciones')->onDelete('cascade');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            

            $table->enum('status', [status::ACTIVO, status::INACTIVO])->default(status::ACTIVO);
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
        Schema::dropIfExists('t_resultados');
    }
}
