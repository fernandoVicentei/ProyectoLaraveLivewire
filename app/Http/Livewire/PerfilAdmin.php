<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User as Usuario;
use App\Models\Empresa;
class PerfilAdmin extends Component
{
public $colorp,$colorpantalla;
    public function render()
    {
        return view('livewire.perfiladmin',[
            'usuarios'=>Usuario::orderBy('id','desc')->paginate(4)
        ]);
    }

    public function mount(){
        $post=Empresa::find(3);
        $this->colorp=$post->colopanel;
        $this->colorpantalla=$post->colorfondo;
    
        }
}
