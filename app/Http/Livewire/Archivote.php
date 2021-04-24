<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Archivo;
use Livewire\WithPagination;
class Archivote extends Component
{
    use WithPagination;
    public $titulo,$autor,$editorial,$fecha,$tipo,$idOriginal;
    public $archiv='creararchiv';
    public function render()
    {        
        return view('livewire.archivote',[
            'archivo'=>Archivo::orderBy('id','desc')->paginate(7)
        ]);
    }
    public function store(){
        $this->validate(['titulo'=>'required','autor'=>'required','editorial'=>'required',
                        'fecha'=>'required','tipo'=>'required' ]);
        $post=Archivo::create([
          'titulo'=>$this->titulo,
          'autor'=>$this->autor,
          'editorial'=>$this->editorial,
          'fecha'=>$this->fecha,
          'tipo'=>$this->tipo          
        ]);    
        $this->default();
    }
    public function editar($idr){
        
        $post=Archivo::where('id', $idr)->firstOrFail();
        $this->idOriginal=$post->id;
        $this->titulo=$post->titulo;
        $this->autor=$post->autor;
        $this->editorial=$post->editorial;
        $this->fecha=$post->fecha;
        $this->tipo=$post->tipo;
        $this->archiv='editararchiv';
    }
    public function actualizar(){
        $this->validate(['titulo'=>'required','autor'=>'required','editorial'=>'required',
                        'fecha'=>'required','tipo'=>'required' ]);     
       // $red=Redosocial::where('idredsocial', $this->idOriginal)->firstOrFail();
        Archivo::where('id', $this->idOriginal)            
            ->update(['titulo'=>$this->titulo,'autor'=>$this->autor,'editorial'=>$this->editorial,
            'fecha'=>$this->fecha,'tipo'=>$this->tipo ]);
        $this->default();
    }
    
    public function default(){
        $this->titulo='';
        $this->autor='';
        $this->editorial='';
        $this->fecha='';
        $this->tipo='';
        $this->archiv='creararchiv';
    }
    public function destroy($id){
        //Redosocial::destroy($id); 
        Archivo::where('id', $id)->delete();
        $this->archiv='creararchiv';
    }
}
