<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Lunar\Facades\Pricing;
use Lunar\Models\Price;
use Lunar\Models\ProductVariant;

class ProductPrice extends Component
{
    public ?Price $price = null;
    public float $priceWithTax;
    public ?ProductVariant $variant = null;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($product = null, $variant = null)
    {
        $this->price = Pricing::for(
            $variant ?: $product->variants->first()
        )->get()->matched;

        // Calculating the price to include the tax
        $priceValue = $this->price ? $this->price->price->value : 0;
        $this->priceWithTax = ($priceValue / 100) * 1.22;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-price', [
            'priceWithTax' => $this->priceWithTax,
        ]);
    }
}
