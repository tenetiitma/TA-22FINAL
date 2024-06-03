<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SubCollectionsPage extends Component
{
    public $naisedSubCollection;
    public $mehedSubCollection;
    public $lapsedSubCollection;

    public function render()
    {
        return view('livewire.sub-collections-page');
    }
}
