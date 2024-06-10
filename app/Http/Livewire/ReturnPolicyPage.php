<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ReturnPolicyPage extends Component
{
    public $title;
    public $metaDescription;

    public function mount()
    {
        $this->title = "WÖÖL | Tagastamistingimused";
        $this->metaDescription = "Tagastamistingimused";
    }

    public function render()
    {
        return view('livewire.return-policy-page')
        ->layout('layouts.storefront', [
                'title' => $this->title,
                'metaDescription' => $this->metaDescription
            ]);
    }
}
