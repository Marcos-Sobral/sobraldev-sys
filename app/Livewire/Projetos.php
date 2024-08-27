<?php

namespace App\Livewire;

use App\Models\Tecnologia;
use App\Models\Projeto;
use Livewire\Component;

class Projetos extends Component
{
    public $projetos;
    public function mount()
    {
        $this->projetos = Projeto::all(); // Busca todas as tecnologias
    }
    
    public function render()
    {
        return view('livewire.projetos');
    }
}
