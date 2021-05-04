<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empresa;

class Contactus extends Component
{
    public $colorpanel,$colorpantalla;
    public function render()
    {
        return view('livewire.contactus');
    }
    public function mount(){
        $post=Empresa::find(3);
        $this->colorpanel=$post->colopanel;
        $this->colorpantalla=$post->colorfondo;
    
        }
}
