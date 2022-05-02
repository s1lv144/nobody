<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class c_tipocatalogo extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relacion uno a muchos
    public function c_tipo_catalogos(){
        return $this->hasMany(c_catalogo::class);
    }

    
}
