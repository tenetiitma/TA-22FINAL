<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dropdown extends Component
{
    public $naisedCollection;
    public $mehedCollection;
    public $lapsedCollection;
    public $naisedSubCollection;
    public $mehedSubCollection;
    public $lapsedSubCollection;

    public function render()
    {
        return view('livewire.dropdown');
    }
}
