<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Persona;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;
    public $apellido,$genero,$fechanacimiento,$direccion,$telefono;
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
            'apellido'=>['required', 'string', 'max:255'],
            'genero'=>'required', 
            'fechanacimiento'=>'required',
            'direccion'=>['required', 'string', 'max:255'],
            'telefono'=>'required',

        ])->validate();            
        $post=User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);        
        Persona::create([
            'nombre'=>$input['name'], 
            'apellidos'=>$input['apellido'], 
            'genero'=>$input['genero'], 
            'fechanacimiento'=>$input['fechanacimiento'],
            'direccion'=>$input['direccion'],
            'telefono'=>$input['telefono'],
            'user_id' =>$post->id
        ]);
        return $post;
    }
}