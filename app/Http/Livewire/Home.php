<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Lunar\Models\Collection;
use Lunar\Models\Url;

class Home extends Component
{
    public $title;
    public $metaDescription;
    /**
     * Return the sale collection.
     *
     * @return \Lunar\Models\Collection|null
     */
    public function getCollectionProperty(): ?Collection
    {
        return Url::whereElementType(Collection::class)->first()?->element ?? null;
    }

    /**
     * Return all images in the sale collection.
     *
     * @return \Illuminate\Support\Collection|null
     */
    public function getCollectionImagesProperty()
    {
        $randomCollection = $this->getRandomCollectionProperty();

        if (!$randomCollection) {
            return null;
        }

        $collectionProducts = $randomCollection->products()->inRandomOrder()->limit(4)->get();

        $productImages = $collectionProducts->map(function ($product) {
            return $product->thumbnail;
        });

        return $productImages->chunk(2);
    }

    /**
     * Return a random collection.
     *
     * @return \Lunar\Models\Collection|null
     */
    public function getRandomCollectionProperty(): ?Collection
    {
        $collections = Url::whereElementType(Collection::class);

        $currentCollection = $this->getCollectionProperty();

        if ($currentCollection) {
            $collections = $collections->where('element_id', '!=', $currentCollection->id);
        }

        return $collections->inRandomOrder()->first()?->element;
    }

    public function mount()
    {
        $this->title = "WÖÖL";
        $this->metaDescription = "Saaremaiselt mÖnus käsitöö";
    }

    public function render()
    {
        return view('livewire.home')
            ->layout('layouts.storefront', [
                'title' => $this->title,
                'metaDescription' => $this->metaDescription
            ]);
    }
}
