<?php

namespace App\Livewire;

use App\Models\Projeto;
use Livewire\Component;

class Projetos extends Component
{
    public function render()
    {
        $projetos = Projeto::with('processos.processoLinks')->get();
        return view('livewire.projetos', compact('projetos'));
    }
}
