<?php

use App\Models\status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCCatalogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_catalogos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->unsignedBigInteger('child_id');

            $table->unsignedBigInteger('c_tipocatalogo_id');
            $table->foreign('c_tipocatalogo_id')->references('id')->on('c_tipocatalogos')->onDelete('cascade');
            
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
        Schema::dropIfExists('c_catalogos');
    }
}
