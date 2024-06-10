<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MeasurementPage extends Component
{
    public $title;
    public $metaDescription;

    public function mount()
    {
        $this->title = "WÖÖL | Möödutabel";
        $this->metaDescription = "Erinevad möödutabelid riietustele";
    }

    public function render()
    {
        return view('livewire.measurement-page')
        ->layout('layouts.storefront', [
                'title' => $this->title,
                'metaDescription' => $this->metaDescription
            ]);
    }
}
