<?php

use App\Models\status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_images', function (Blueprint $table) {
            $table->id();
            $table->string('url');
           

            $table->unsignedBigInteger('t_resultados_id');
            $table->foreign('t_resultados_id')->references('id')->on('t_resultados')->onDelete('cascade');


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
        Schema::dropIfExists('t_images');
    }
}
