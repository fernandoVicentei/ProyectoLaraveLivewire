<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\Persona;
use App\Models\Redsocial;
use App\Models\Archivo;
use App\Models\User;

class PerfilVista extends Component
{
    public $datos;
    public $datosP;
    public $nombre,$apellidos,$genero,$fechanacimiento,$direccion,$telefono,$idOrigina;
    public $name,$email,$password,$rol,$user_id;
    public function render()
    {      
        Auth::user()->name=$this->name;
        return view('livewire.perfil-vista');
    }
    public function mount(){
        $this->llenardata();
    }
    public function llenardata(){
        $this->datos=Auth::user();
        $this->datosP=Persona::where('user_id', $this->datos->id)->firstOrFail();
        //persona 
        $this->nombre=$this->datosP->nombre;
        $this->apellidos=$this->datosP->apellidos;
        $this->genero=$this->datosP->genero;
        $this->fechanacimiento=$this->datosP->fechanacimiento;
        $this->direccion=$this->datosP->direccion;
        $this->telefono=$this->datosP->telefono;
        //user
        $this->name=$this->datos->name;
        $this->email=$this->datos->email;
        $this->password=$this->datos->password;
        $this->rol=$this->datos->rol;
    }
    public function actualizarpersona(){
        $this->validate(['nombre'=>'required','apellidos'=>'required','genero'=>'required',
        'fechanacimiento'=>'required','direccion'=>'required',
        'telefono'=>'required']);
        $persona=Persona::find($this->datosP->id);

        $persona->update([
            'nombre'=>$this->nombre,
            'apellidos'=>$this->apellidos,
            'genero'=>$this->genero,
            'fechanacimiento'=>$this->fechanacimiento,
            'direccion'=>$this->direccion,
            'telefono'=>$this->telefono,
            'user_id'=>$this->datosP->user_id
        ]);
    }
    public function actualizaruser(){
        $this->validate(['name'=>'required','email'=>'required','password'=>'required',
        'rol'=>'required']);
      // Hash::make();
        $usuarios=User::find($this->datos->id);
        $usuarios->update([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->datos->password,
            'rol'=>$this->rol            
        ]); 
        
    }
}
