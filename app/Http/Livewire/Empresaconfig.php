<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use App\Models\Empresa;
class Empresaconfig extends Component
{
    use WithFileUploads;
    
    public $foto,$fotoempresa,$colorpanel,$colorpantalla,$colorp;
    public function render()
    {        
        return view('livewire.empresaconfig');

    }
    public function prueba(){        

        if($this->foto!=null){
            $this->validate([
                'foto' => 'image|max:1024',
            ]);
            $nombre=$this->foto->getClientOriginalName();
            $this->foto->storeAs('img/','logo.jpg','public_uploads');
        }
        if($this->fotoempresa!=null){
            $this->validate([
                'fotoempresa' => 'image|max:2048',
            ]);
            $nombrefoto=$this->fotoempresa->getClientOriginalName();
            $this->fotoempresa->storeAs('img/','empresa.jpg','public_uploads');
        }        
       $color1=$this->colorpanel;
       $color2=$this->colorpantalla;
       Empresa::where('id', 3)     
           ->update(['colorfondo'=>$color2,'colopanel'=>$color1]);
      
       dd("subido y guardado");
    }
    public function mount(){
        $post=Empresa::find(3);
        $this->colorpanel=$post->colopanel;
        $this->colorpantalla=$post->colorfondo;
    }
}
/*Empresa::create([
          'nombre'=>'LIBROTECA',
          'logo'=>'logo.jpg',
          'colorfondo'=>$color2,
          'colopanel'=>$color1,
          'telefono'=>'Telf 6565543',
          'direccion'=>'Av LOS CIÑANI',
          'fotoempresa'=>'empresa.jpg'
      ]);*/
