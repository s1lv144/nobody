<?php

use App\Models\t_asignacione;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class CreateTAsignacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_asignaciones', function (Blueprint $table) {
            $table->id();
            $table->enum('status', [t_asignacione::PENDIENTE, t_asignacione::RECIBIDA])->default(t_asignacione::PENDIENTE);
            $table->string('end_at')->useCurrent(Carbon::now()->timestamp);
            $table->unsignedBigInteger('t_lugarhechos_id');
            $table->foreign('t_lugarhechos_id')->references('id')->on('t_lugarhechos')->onDelete('cascade');//id depto
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
        Schema::dropIfExists('t_asignaciones');
    }
}
