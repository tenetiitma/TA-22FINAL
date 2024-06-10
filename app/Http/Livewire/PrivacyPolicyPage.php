<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PrivacyPolicyPage extends Component
{
    public $title;
    public $metaDescription;

    public function mount()
    {
        $this->title = "WÖÖL | Privaatsustingimused";
        $this->metaDescription = "Privaatsustingimused";
    }

    public function render()
    {
        return view('livewire.privacy-policy-page')
        ->layout('layouts.storefront', [
                'title' => $this->title,
                'metaDescription' => $this->metaDescription
            ]);
    }
}
