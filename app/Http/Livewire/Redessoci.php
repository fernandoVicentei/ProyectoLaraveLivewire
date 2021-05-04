<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Redsocial;
use Livewire\WithPagination;
use App\Models\Empresa;
class Redessoci extends Component
{
    use WithPagination;
    public $nombrered,$dominio,$idOriginal,$colorp,$colorpantalla;
    public $redv='crearred';
    public $item="hola";
    public $clon=[];
    public $vect=[1,2,3,4,5,6,7];
    public function render()
    { 
        return view('livewire.redessoci',[
            'red'=>Redsocial::orderBy('id','desc')->paginate(4)
        ]);
    }
    public function mount()
    {
  $post=Empresa::find(3);
        $this->colorp=$post->colopanel;
        $this->colorpantalla=$post->colorfondo;
    }
   
    public function store(){
        $this->validate(['nombrered'=>'required','dominio'=>'required']);
        $post=Redsocial::create([
          'nombrered' => $this->nombrered,
          'dominio' => $this->dominio,
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
