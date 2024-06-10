<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AboutPage extends Component
{
    public $title;
    public $metaDescription;

    public function mount()
    {
        $this->title = "WÖÖL | Tutvustus";
        $this->metaDescription = "Kes me oleme? Wööl.";
    }

    public function render()
    {
        return view('livewire.about-page')
        ->layout('layouts.storefront', [
                'title' => $this->title,
                'metaDescription' => $this->metaDescription
        ]);
    }
}
