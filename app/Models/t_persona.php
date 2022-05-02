<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_persona extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

  //Relacion uno a muchos inversa
  public function c_tipo_catalogos(){
    return $this->belongsToMany(c_tipocatalogo::class,'genero_id','rol_id','organizacion_id','pandilla_id');
   }

    //Relacion uno a muchos inversa
  public function t_delitos(){
    return $this->belongsTo(t_delito::class);
   }

    //Relacion uno a muchos inversa
  public function t_denuncias(){
    return $this->belongsTo(t_denuncia::class);
   }

}
