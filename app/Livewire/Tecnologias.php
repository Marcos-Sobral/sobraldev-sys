<?php

namespace App\Livewire;

use App\Models\Tecnologia;
use Livewire\Component;

class Tecnologias extends Component
{
    public $tecnologias;
    public function mount()
    {
        $this->tecnologias = Tecnologia::all(); // Busca todas as tecnologias
    }
    
    public function render()
    {
        return view('livewire.tecnologias');
    }
}
