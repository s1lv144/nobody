<?php

use App\Models\status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDelitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_delitos', function (Blueprint $table) {
            $table->id();
            $table->enum('status', [status::ACTIVO, status::INACTIVO])->default(status::ACTIVO);
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
        Schema::dropIfExists('t_delitos');
    }
}
