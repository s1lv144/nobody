<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_patrullasper extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

     //Relacion uno a muchos
     public function t_patrullas(){
        return $this->hasMany(t_patrulla::class);
    }

     //Relacion uno a muchos inversa
   public function t_patrullaspers(){
    return $this->belongsTo(t_patrullasper::class);
}
}
