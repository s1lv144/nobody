<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class c_catalogo extends Model
{
    use HasFactory;
    protected $fillable = ['descripcion', 'status','child_id','c_tipocatalogo_id'];
    
   //Relacion uno a muchos inversa
   public function c_tipo_catalogos(){
    return $this->belongsTo(c_tipocatalogo::class);
}

    //Relacion uno a muchos
    public function t_personas(){
        return $this->hasMany(t_persona::class);
    }
    

}
