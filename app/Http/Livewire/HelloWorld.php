<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name ="ALi";
    public $last ="Meri";
    public $loud =false;
    public $gretting =["hi"];
    public function render()
    {
        return view('livewire.hello-world');
    }
}