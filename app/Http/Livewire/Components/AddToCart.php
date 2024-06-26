<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Lunar\Base\Purchasable;
use Lunar\Facades\CartSession;

class AddToCart extends Component
{
    /**
     * The purchasable model we want to add to the cart.
     *
     * @var Purchasable
     */
    public ?Purchasable $purchasable = null;

    /**
     * The quantity to add to cart.
     *
     * @var int
     */
    public $quantity = 1;

    /**
     * {@inheritDoc}
     */
    public function rules()
    {
        return [
            'quantity' => 'required|numeric|min:1|max:10000',
        ];
    }

        public function messages()
    {
        return [
            'quantity.min' => 'Palun vali vähemalt 1 toode',
        ];
    }

    public function addToCart()
    {
        $this->validate();

        if ($this->purchasable->stock < $this->quantity) {
            $this->addError('quantity', 'Toodet pole hetkel laos!');
            return;
        }

        CartSession::manager()->add($this->purchasable, $this->quantity);
        $this->emit('add-to-cart');

        session()->flash('message', 'Toode lisatud ostukorvi!');
    }

    public function render()
    {
        return view('livewire.components.add-to-cart');
    }
}
