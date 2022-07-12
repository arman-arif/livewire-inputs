<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form1 extends Component
{
    public $name;
    public $features;
    public $options;
    public $terms;

    public function mount()
    {
    }


    public function render()
    {
        return view('livewire.form1');
    }
}
