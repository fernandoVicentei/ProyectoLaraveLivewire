<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Archivo;
use App\Models\Persona;
use App\Models\Empresa;
class Articulo extends Component
{
    public $colorpanel,$colorpantalla,$idpersona,$prueba;
    public function render()
    {
        return view('livewire.articulo',[
            'archivo'=>Archivo::join('persona_archivos','persona_archivos.idarchivo','=','archivos.id')
            ->join('personas','persona_archivos.idpersona','=','personas.id')
            ->select('archivos.titulo','archivos.autor','archivos.editorial','archivos.tipo','archivos.fecha','archivos.url','personas.id')
            ->where('persona_archivos.idpersona','=',$this->idpersona)
            ->get()
        ]);
    }
    public function mount(){
        $post=Empresa::find(3);
        $this->colorpanel=$post->colopanel;
        $this->colorpantalla=$post->colorfondo;
        $persona=Persona::where('user_id', Auth::user()->id)->firstOrFail();
        $this->idpersona=$persona->id;
    }
    public function probando($id)
    {
        $this->prueba='pruebas';
       
        //return Storage::disk('exports')->download('export.csv');
    }
}
