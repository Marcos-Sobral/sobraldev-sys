<?php

namespace App\Livewire;

use App\Models\ProjetoCientifico;
use Livewire\Component;

class ProjetosCientificos extends Component
{
    public function render()
    {
        $projetosCientificos = ProjetoCientifico::with('projetoCientificoLink')->get();
        return view('livewire.projetos-cientificos', compact('projetosCientificos'));
    }
}
