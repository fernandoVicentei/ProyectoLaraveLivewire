<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Redsocial extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [     
        'idredsocial'  , 
        'nombrered', 
        'dominio'        
        ];   
}
