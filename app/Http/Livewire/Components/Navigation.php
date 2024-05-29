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

    public $naisedCollection;
    public $naisedSubCollection;
    public $mehedCollection;
    public $mehedSubCollection;
    public $lapsedCollection;
    public $lapsedSubCollection;
    public $openNaisedSubMenu = false;
    public $openMehedSubMenu = false;
    public $openLapsedSubMenu = false;
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
        $this->naisedSubCollection = Collection::where('parent_id', 1)->get();
        $this->mehedSubCollection = Collection::where('parent_id', 2)->get();
        $this->lapsedSubCollection = Collection::where('parent_id', 3)->get();
    }

    public function render()
    {
        return view('livewire.components.navigation', [
            'naisedCollection' => $this->naisedCollection,
            'mehedCollection' => $this->mehedCollection,
            'lapsedCollection' => $this->lapsedCollection,
            'naisedSubCollection' => $this->naisedSubCollection,
            'mehedSubCollection' => $this->mehedSubCollection,
            'lapsedSubCollection' => $this->lapsedSubCollection,
        ]);
    }
}
