<?php

use App\Models\status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPatrullasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_patrullas', function (Blueprint $table) {
            $table->id();
          

            $table->unsignedBigInteger('t_lugarhechos_id');
            $table->foreign('t_lugarhechos_id')->references('id')->on('t_lugarhechos')->onDelete('cascade');

            $table->unsignedBigInteger('t_asignaciones_id');
            $table->foreign('t_asignaciones_id')->references('id')->on('t_asignaciones')->onDelete('cascade');
            
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
        Schema::dropIfExists('t_patrullas');
    }
}
