<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\status;

class CreateCTipocatalogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_tipocatalogos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
           
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
        Schema::dropIfExists('c_tipocatalogos');
    }
}
