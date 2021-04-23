<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User as Usuario;
use Livewire\WithPagination;
class User extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.user',[
            'usuarios'=>Usuario::orderBy('id','desc')->paginate(4)
        ]);
    }

    /*public function mount($name){

        $this->name=$name;
    }*/
    
}
