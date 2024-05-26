<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductCarousel extends Component
{
    public $products;
    public $currentIndex = 0;

    public function mount($products)
    {
        $this->products = $products;
    }

    public function next()
    {
        if ($this->currentIndex < count($this->products) - 4) {
            $this->currentIndex++;
        }
    }

    public function prev()
    {
        if ($this->currentIndex > 0) {
            $this->currentIndex--;
        }
    }

    public function render()
    {
        return view('livewire.product-carousel');
    }
}
