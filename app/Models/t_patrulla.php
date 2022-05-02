<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_patrulla extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function lugarAsignacionPat()
    {
        return $this->hasOneThrough(t_lugarhecho::class, t_asignacione::class);
    }

    //Relacion uno a muchos inversa
   public function t_resultados(){
    return $this->belongsTo(t_resultado::class);
}
}
