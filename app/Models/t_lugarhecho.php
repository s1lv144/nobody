<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_lugarhecho extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

     //Relacion uno a muchos inversa
  public function t_denuncias(){
    return $this->belongsTo(t_denuncias::class);
   }

    //Relacion uno a uno inversa
  public function t_asignaciones(){
    return $this->belongsTo(t_asignacion::class);
   }
}
