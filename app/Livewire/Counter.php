<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $total = 0;

    public function sumar()
    {
        $this->total += 1;
    }

    public function restar()
    {
        $this->total -= 1;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
