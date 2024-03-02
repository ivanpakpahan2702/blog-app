<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Alkitab extends Component
{
    #[Title('Alkitab')]
    public function render()
    {
        return view('livewire.alkitab');
    }
}
