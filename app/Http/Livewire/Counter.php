<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $name = '';

    public function mount()
    {
        $this->name = 'Costomer';
    }

    public function updated()
    {
        $this->name = 'Updated';
    }

    public function mouseOver()
    {
        $this->name = 'MouseOver';
    }

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.counter');
    }

}
