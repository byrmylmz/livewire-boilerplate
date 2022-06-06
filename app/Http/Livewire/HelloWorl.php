<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorl extends Component
{   
    public $name = 'bayram';
    public $loud = false;
    public $greetings =['Hello'];
    
    public function render()
    {
        return view('livewire.hello-worl');
    }
}
