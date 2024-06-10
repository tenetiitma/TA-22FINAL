<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SalesTermsPage extends Component
{
    public $title;
    public $metaDescription;

    public function mount()
    {
        $this->title = "WÖÖL | Müügitingimused";
        $this->metaDescription = "Müügitingimused";
    }

    public function render()
    {
        return view('livewire.sales-terms-page')
        ->layout('layouts.storefront', [
                'title' => $this->title,
                'metaDescription' => $this->metaDescription
            ]);
    }
}
