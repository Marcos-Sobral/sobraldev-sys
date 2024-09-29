<?php

namespace App\Livewire;

use App\Models\Tecnologia;
use Livewire\Component;

class Tecnologias extends Component
{
    public $tecnologias;
    public function mount()
    {
        // Consulta para contar as tecnologias mais usadas
        $this->tecnologias = Tecnologia::withCount('processos')
        ->orderBy('processos_count', 'desc')
        ->take(10)
        ->get();
    }
    
    public function render()
    {
        return view('livewire.tecnologias');
    }
}
