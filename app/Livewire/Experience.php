<?php

namespace App\Livewire;

use App\Models\Experience as ModelsExperience;
use Livewire\Component;

class Experience extends Component
{
    public $experiences;

    public function mount()
    {
        // Buscar todas as experiências
        $this->experiences = ModelsExperience::all();
    }
    public function render()
    {
        return view('livewire.experience');
    }
}
