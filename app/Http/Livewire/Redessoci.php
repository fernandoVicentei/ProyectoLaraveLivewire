<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Redsocial;
use Livewire\WithPagination;
class Redessoci extends Component
{
    use WithPagination;
    public $nombrered,$dominio,$idOriginal;
    public $redv='crearred';
    public $item="hola";
    public $clon=[];
    public $vect=[1,2,3,4,5,6,7];
    public function render()
    { 
        if($this->item!='hola'){
            array_push($this->clon,$this->item);
            $clonloca=[];
            foreach($this->vect as $valor){
                if($this->item==$valor){                         
                }else{
                    array_push($clonloca,$valor);
                }
            }
            $this->vect=$clonloca;
        }       
       

        return view('livewire.redessoci',[
            'red'=>Redsocial::orderBy('id','desc')->paginate(4)
        ]);
    }
    public function mount()
    {
        
    }
    public function borrar($id)
    {
        $clonlocal=[];
        foreach($this->clon  as $valor){
            if($id==$valor){   
                   
            }else{
                array_push($clonlocal,$valor);
            }
        }
        $this->clon= [];
        $this->item='hola';
        $this->clon=$clonlocal;
        array_push($this->vect,$id);       

    }
    public function store(){
        


        $this->validate(['nombrered'=>'required','dominio'=>'required']);
        $post=Redsocial::create([
          'nombrered'=>$this->nombrered,
          'dominio'=>$this->dominio
        ]);    
        
        $this->default();
    }
    public function editar($idr){
        $post=Redsocial::where('id', $idr)->firstOrFail();
        $this->idOriginal=$post->id;
        $this->nombrered=$post->nombrered;
        $this->dominio=$post->dominio;
        $this->redv='editarred';
    }
    public function actualizar(){
        $this->validate(['nombrered'=>'required','dominio'=>'required']);        
       // $red=Redosocial::where('idredsocial', $this->idOriginal)->firstOrFail();
        Redsocial::where('id', $this->idOriginal)            
            ->update(['nombrered' => $this->nombrered,'dominio'=>$this->dominio]);
        $this->default();
    }
    public function default(){
        $this->nombrered='';
        $this->dominio='';
        $this->redv='crearred';
    }
    public function destroy($id){
        //Redosocial::destroy($id); 
        Redsocial::where('id', $id)->delete();
    }
}
