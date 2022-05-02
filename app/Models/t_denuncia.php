<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_denuncia extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relacion uno a muchos
    public function t_personas(){
        return $this->hasMany(t_personas::class);
    }

    //Relacion uno a muchos
    public function t_lugarhechos(){
        return $this->hasMany(t_lugarhecho::class);
    }
}
