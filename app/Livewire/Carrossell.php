<?php

namespace App\Livewire;
use App\Models\Carrossel;
use Livewire\Component;

class Carrossell extends Component
{
    public function render()
    {
        $carrosseis = Carrossel::with('carrosselLink')->get();
        return view('livewire.carrossel', compact('carrosseis'));
    }
}
