<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StatsSection extends Component
{
        public $stats = [
        [
            'value' => '25+',
            'label' => 'Aastat kogemust'
        ],
        [
            'value' => '1000+',
            'label' => 'Rahulolevat klienti'
        ],
        [
            'value' => '0',
            'label' => 'Loomade väärkohtlemist'
        ],
        [
            'value' => '100%',
            'label' => 'Armastust toodetes'
        ]
    ];
    public function render()
    {
        return view('livewire.stats-section');
    }
}
