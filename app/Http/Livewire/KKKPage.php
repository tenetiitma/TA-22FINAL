<?php

namespace App\Http\Livewire;

use Livewire\Component;

class KKKPage extends Component
{
    public $title;
    public $metaDescription;

    public function mount()
    {
        $this->title = "WÖÖL | KKK";
        $this->metaDescription = "Korduma kippuvad küsimused";
    }

    public function render()
    {
        return view('livewire.k-k-k-page')
            ->layout('layouts.storefront', [
                'title' => $this->title,
                'metaDescription' => $this->metaDescription
            ]);
    }
}
