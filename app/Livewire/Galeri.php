<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Galeri extends Component
{
    #[Title('Galeri')]
    public function render()
    {
        return view('livewire.galeri');
    }
}
