<?php

namespace App\Modifiers;

use Lunar\DataTypes\Price;
use Lunar\DataTypes\ShippingOption;
use Lunar\Facades\ShippingManifest;
use Lunar\Models\Cart;
use Lunar\Models\TaxClass;

class ShippingModifier
{
    public function handle(Cart $cart)
    {
        // Get the tax class
        $taxClass = TaxClass::getDefault();

        ShippingManifest::addOption(
            new ShippingOption(
                name: 'Postiga saatmine aadressile',
                description: 'Postiga saatmine aadressile',
                identifier: 'BASDEL',
                price: new Price(500, $cart->currency, 1),
                taxClass: $taxClass
            )
        );

        ShippingManifest::addOption(
            new ShippingOption(
                name: 'Tulen ise järgi',
                description: 'Tulen ise järgi',
                identifier: 'EXPDEL',
                price: new Price(0, $cart->currency, 1),
                taxClass: $taxClass
            )
        );
    }
}
