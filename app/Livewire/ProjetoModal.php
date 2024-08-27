<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Projeto;

class ProjetoModal extends Component
{
    public $projetoId;
    public $projeto;
    public $processos;

    public function mount($projetoId)
    {
        $this->projetoId = $projetoId;
        $this->projeto = Projeto::find($projetoId);
        $this->processos = $this->projeto ? $this->projeto->processos : [];
    }

    public function render()
    {
        return view('livewire.projeto-modal');
    }
}
