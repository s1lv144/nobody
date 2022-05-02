<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\ApiTrait;
class t_resultado extends Model
{
    use HasFactory,ApiTrait;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function lugarAsignacionRes()
    {
        return $this->hasOneThrough(t_lugarhecho::class, t_asignacione::class);
    }

     //Relacion uno a muchos
     public function t_resultados(){
        return $this->hasMany(t_patrulla::class);
    }

    //Relacion uno a muchos inversa
   public function t_images(){
    return $this->belongsTo(t_image::class);
}
}
