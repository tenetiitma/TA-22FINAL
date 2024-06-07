<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Lunar\Models\Product;

class SearchPage extends Component
{
    use WithPagination;

    protected $queryString = [
        'term',
    ];

    public ?string $term = null;

    public function getResultsProperty()
    {
        return Product::search($this->term)->paginate(50);
    }

    public function render()
    {
        return view('livewire.search-page');
    }
}
