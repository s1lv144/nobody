<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_asignacione extends Model
{
    use HasFactory;
    const PENDIENTE = 1;
    const RECIBIDA = 2;
    const FINALIZADA = 3;
    const ELIMINADA = 4;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relacion uno a uno
    public function c_lugarhechos(){
        return $this->hasOne(t_lugarhecho::class);
    }

   
}
