<?php

use App\Models\status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPatrullaspersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_patrullaspers', function (Blueprint $table) {
            $table->id();
            $table->string('dui');
            $table->string('codper');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('categoria');
           
            $table->enum('status', [status::ACTIVO, status::INACTIVO])->default(status::ACTIVO);

            $table->unsignedBigInteger('rol_id');

            $table->foreign('rol_id')
            ->references('id')
            ->on('c_catalogos')
            ->onDelete('cascade');     
           
            $table->unsignedBigInteger('t_patrullas_id');
            $table->foreign('t_patrullas_id')->references('id')->on('t_patrullas')->onDelete('cascade');

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
        Schema::dropIfExists('t_patrullaspers');
    }
}
