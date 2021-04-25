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
    public $nombre,$apellidos,$genero,$fechanacimiento,$direccion,$telefono,$idOriginal;
    public $name,$email,$password,$rol,$user_id;
    //redespersona
    public $item='hola';
    public $elegidos=[];
    public $vect=[];
    public $prueba=[];
    public function render()
    {
        if($this->item!='hola'){           
            $longi=count($this->vect);
            $clonloca=[];
            foreach($this->vect as $key=>$valor){
                if($this->item==$valor['id']){
                    array_push($this->elegidos,['id'=>$valor['id'],'nombrered'=>$valor['nombrered']]);
                }else{
                    array_push($clonloca,['id'=>$valor['id'],'nombrered'=>$valor['nombrered']]);
                }
            }          
            $this->vect=$clonloca;
        }
        Auth::user()->name=$this->name;
        return view('livewire.perfil-vista');
    }
    public function mount(){
        $this->prueba= Persona::find(3)->redsocial;
        $vector=Redsocial::all();
        $encontrado=false;
        foreach($vector as $valo)    {       
            foreach($this->prueba as $key=>$valor){
                if($valo->id==$valor['id']){
                    $encontrado=true;
                    break;
                }else{
                }
            }
            if($encontrado){
                array_push($this->elegidos,['id'=>$valo->id,'nombrered'=>$valo->nombrered]);
                $encontrado=false;
            }else{
                array_push($this->vect,['id'=>$valo->id,'nombrered'=>$valo->nombrered]);
            }               
        }        
        $this->llenardata();
    }
    public function borrar($id)
    {
        $clonlocal=[];
        foreach($this->elegidos  as $key=>$valor){
            if($id==$valor['id']){       
                array_push($this->vect,["id"=>$valor['id'],"nombrered"=>$valor['nombrered']]);            
            }else{
                array_push($clonlocal,["id"=>$valor['id'],"nombrered"=>$valor['nombrered']]);
            }
        }
        $this->elegidos= [];
        $this->item='hola';
        $this->elegidos=$clonlocal;       
    }
    
    public function llenardata(){
        $this->datos=Auth::user();
        $this->datosP=Persona::where('user_id', $this->datos->id)->firstOrFail();
        //persona 
        $this->idOriginal=$this->datosP->id;
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
    public function actualizarredespersona(){
        //many to many
        $persona=Persona::find($this->idOriginal);
        $vectorids=[];
        foreach($this->elegidos as $key=>$valor){
            array_push($vectorids,$valor['id']);
        }
        $persona->redsocial()->sync($vectorids);
    }
}
