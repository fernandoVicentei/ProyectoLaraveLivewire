<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Persona;
class Redsocial extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [     
        'idredsocial'  , 
        'nombrered', 
        'dominio'        
        ];   
    public function persona(){
        return $this->belongsToMany(Persona::class,'persona_redsocial','idredsocial','idpersona');
    }
}
