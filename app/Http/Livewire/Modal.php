<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public $imageUrl;

    protected $listeners = ['modalOpened' => 'openModal'];

    public function openModal($imageUrl) {
        $this->imageUrl = $imageUrl;
        $this->dispatchBrowserEvent('open-modal');
    }
    public function render()
    {
        return view('livewire.modal');
    }

}
