<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Redsocial;
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
}
