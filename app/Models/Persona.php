<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Redsocial;
use App\Models\Archivo;
class Persona extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre', 
        'apellidos', 
        'genero', 
        'fechanacimiento',
        'direccion',
        'telefono',
        'user_id'        
        ];   
    public function redsocial(){
        return $this->belongsToMany(Redsocial::class,'persona_redsocial','idpersona','idredsocial');
    }
    public function archivo(){
        return $this->belongsToMany(Archivo::class,'persona_archivos','idpersona','idarchivo');
    }
}
