<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Lunar\Models\Collection;

class SubColPage extends Component
{
    /**
     * The search term for the search input.
     *
     * @var string
     */
    public $term = null;
    
    public $subCollection;

    protected $queryString = [
        'term',
    ];

    public function getCollectionsProperty()
    {
        return Collection::with(['defaultUrl'])->get()->toTree();
    }

    public function mount($slug)
    {
        switch ($slug) {
            case 'women':
                $this->subCollection = Collection::where('parent_id', 1)->get();
                break;
            case 'men':
                $this->subCollection = Collection::where('parent_id', 2)->get();
                break;
            case 'children':
                $this->subCollection = Collection::where('parent_id', 3)->get();
                break;
            default:
                abort(404);
        }

    }


    public function render()
    {
        return view('livewire.sub-col-page', [
            'subCollection' => $this->subCollection,
        ]);
    }
}
