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
    public function render()
    { 
        return view('livewire.redessoci',[
            'red'=>Redsocial::orderBy('id','desc')->paginate(4)
        ]);
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
