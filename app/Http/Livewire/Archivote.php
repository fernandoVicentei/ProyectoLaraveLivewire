<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Archivo;
use Livewire\WithPagination;
class Archivote extends Component
{
    use WithPagination;
    public function render()
    {
        
        return view('livewire.archivote',[
            'archivo'=>Archivo::orderBy('id','desc')->paginate(7)
        ]);
    }
}
