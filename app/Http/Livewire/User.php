<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User as Usuario;
use Livewire\WithPagination;
use App\Models\Empresa;
class User extends Component
{
public $colorp,$colorpantalla;
    use WithPagination;
    public function render()
    {
        return view('livewire.user',[
            'usuarios'=>Usuario::orderBy('id','desc')->paginate(4)
        ]);
    }

     public function mount(){
        $post=Empresa::find(3);
        $this->colorp=$post->colopanel;
        $this->colorpantalla=$post->colorfondo;
    }
    
}
