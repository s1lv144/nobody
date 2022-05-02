<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_image extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relacion uno a muchos
    public function t_resultados(){
        return $this->hasMany(t_resultado::class);
    }
}
