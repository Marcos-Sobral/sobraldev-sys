<?php

namespace App\Livewire;

use App\Models\Projeto;
use Livewire\Component;

class ProcessoModal extends Component
{
    public $projeto;

    public function mount($projetoId)
    {
        $this->projeto = Projeto::with('processos.processoLinks', 'processos.tecnologias')->find($projetoId);
    }
    
    
    public function render()
    {
        return view('livewire.processomodal');
    }
}
