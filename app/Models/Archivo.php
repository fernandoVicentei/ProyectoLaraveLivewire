<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Persona;
class Archivo extends Model
{
    use HasFactory;
    protected $fillable = [     
        'id'  , 
        'titulo', 
        'autor',
        'editorial',
        'fecha',
        'tipo'        
        ];   
        public function persona(){
            return $this->belongsToMany(Persona::class,'persona_archivos','idarchivo','idpersona');
        }
}
