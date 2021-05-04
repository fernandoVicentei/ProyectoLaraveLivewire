<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\Persona;
use App\Models\Redsocial;
use App\Models\Archivo;
use App\Models\User;
use App\Models\Empresa;
class PerfilVista extends Component
{
    public $datos;
    public $datosP;
    public $nombre,$apellidos,$genero,$fechanacimiento,$direccion,$telefono,$idOriginal,$colorp,$colorpantalla;
    public $name,$email,$password,$rol,$user_id;
    //redespersona
    public $item='-';
    public $itemarchivo='-';
    public $elegidos=[];
    public $vect=[];
    public $listarchivos=[];
    public $archivoselegidos=[];
    public function render()
    {
        //redes
        if($this->item!='-'){         
            $clonloca=[];
            foreach($this->vect as $key=>$valor){
                if($this->item==$valor['id']){
                    array_push($this->elegidos,['id'=>$valor['id'],'nombrered'=>$valor['nombrered'],'dominio'=>$valor['dominio']]);
                }else{
                    array_push($clonloca,['id'=>$valor['id'],'nombrered'=>$valor['nombrered'],'dominio'=>$valor['dominio']]);
                }
            }          
            $this->vect=$clonloca;
        }
        //archivos
        if($this->itemarchivo!='-'){
            $clonlocal=[];
            foreach($this->listarchivos as $key=>$valor){
                if($this->itemarchivo==$valor['id']){
                    array_push($this->archivoselegidos,['id'=>$valor['id'],'titulo'=>$valor['titulo'],'autor'=>$valor['autor']]);
                }else{
                    array_push($clonlocal,['id'=>$valor['id'],'titulo'=>$valor['titulo'],'autor'=>$valor['autor']]);
                }
            }    
            $this->listarchivos=$clonlocal;
        }
        Auth::user()->name=$this->name;
        return view('livewire.perfil-vista');
    }
    public function mount(){
        $this->llenardata();
        $archivos=Archivo::all();
        $prueba= Persona::find($this->idOriginal)->redsocial;
        $archpersona= Persona::find($this->idOriginal)->archivo;
        $vector=Redsocial::all();
        $encontrado=false;
        //redes
        foreach($vector as $valo)    {       
            foreach($prueba as $key=>$valor){
                if($valo->id==$valor['id']){
                    $encontrado=true;
                    break;
                }else{
                }
            }
            if($encontrado){
                array_push($this->elegidos,['id'=>$valo->id,'nombrered'=>$valo->nombrered,'dominio'=>$valo->dominio]);
                $encontrado=false;
            }else{
                array_push($this->vect,['id'=>$valo->id,'nombrered'=>$valo->nombrered,'dominio'=>$valo->dominio]);
            }               
        }    
        //archivo
        $encontrado=false;
        foreach($archivos as $arch){
            foreach($archpersona as $key=>$valor){
                if($arch->id==$valor['id']){
                    $encontrado=true;
                    break;
                }else{
                }
            }
            if($encontrado){
                array_push($this->archivoselegidos,['id'=>$arch->id,'titulo'=>$arch->titulo,'autor'=>$arch->autor]);
                $encontrado=false;
            }else{
                array_push($this->listarchivos,['id'=>$arch->id,'titulo'=>$arch->titulo,'autor'=>$arch->autor]);
            }            
        }    
 $post=Empresa::find(3);
        $this->colorp=$post->colopanel;
        $this->colorpantalla=$post->colorfondo;

    }
    public function borrar($id)
    {
        $clonlocal=[];
        foreach($this->elegidos  as $key=>$valor){
            if($id==$valor['id']){       
                array_push($this->vect,["id"=>$valor['id'],"nombrered"=>$valor['nombrered'],"dominio"=>$valor['dominio']]);            
            }else{
                array_push($clonlocal,["id"=>$valor['id'],"nombrered"=>$valor['nombrered'],"dominio"=>$valor['dominio']]);
            }
        }
        $this->elegidos= [];
        $this->item='-';
        $this->elegidos=$clonlocal;       
    }
    public function borrararch($id){
        $clonlocal=[];
        foreach($this->archivoselegidos  as $key=>$valor){
            if($id==$valor['id']){       
                array_push($this->listarchivos,["id"=>$valor['id'],"titulo"=>$valor['titulo'],"autor"=>$valor['autor']]);            
            }else{
                array_push($clonlocal,["id"=>$valor['id'],"titulo"=>$valor['titulo'],"autor"=>$valor['autor']]);
            }
        }
        $this->archivoselegidos= [];
        $this->itemarchivo='-';
        $this->archivoselegidos=$clonlocal;      
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
        $this->validate(['name'=>'required','email'=>'required','password'=>'required']);
      // Hash::make();
        $usuarios=User::find($this->datos->id);
        $usuarios->update([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->datos->password,
            'rol'=>null            
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
    public function actualizararchivopersona(){
        $persona=Persona::find($this->idOriginal);
        $vectorar=[];
        foreach($this->archivoselegidos as $key=>$valor){
            array_push($vectorar,$valor['id']);
        }
        $persona->archivo()->sync($vectorar);
    }
}
