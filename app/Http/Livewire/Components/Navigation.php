<?php

namespace App\Http\Livewire\Components;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Lunar\Models\Collection;

class Navigation extends Component
{
    /**
     * The search term for the search input.
     *
     * @var string
     */
    public $term = null;

    /** WOMEN */
    public $naisedCollection;
    /** MEN */
    public $mehedCollection;
    /** KIDS */
    public $lapsedCollection;

    /**
     * {@inheritDoc}
     */
    protected $queryString = [
        'term',
    ];

    /**
     * Return the collections in a tree.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getCollectionsProperty()
    {
        return Collection::with(['defaultUrl'])->get()->toTree();
    }

    public function mount()
    {
        $this->naisedCollection = Collection::where(DB::raw("JSON_EXTRACT(attribute_data, '$.name.value.en')"), 'Naised')->first();
        $this->mehedCollection = Collection::where(DB::raw("JSON_EXTRACT(attribute_data, '$.name.value.en')"), 'Mehed')->first();
        $this->lapsedCollection = Collection::where(DB::raw("JSON_EXTRACT(attribute_data, '$.name.value.en')"), 'Lapsed')->first();
    }

    public function render()
    {
        return view('livewire.components.navigation', [
            'naisedCollection' => $this->naisedCollection,
            'mehedCollection' => $this->mehedCollection,
            'lapsedCollection' => $this->lapsedCollection,
        ]);
    }
}
