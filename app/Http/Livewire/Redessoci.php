<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Redsocial;
use Livewire\WithPagination;
class Redessoci extends Component
{
    use WithPagination;
    public function render()
    { 
        return view('livewire.redessoci',[
            'red'=>Redsocial::orderBy('id','desc')->paginate(4)
        ]);
    }
}
