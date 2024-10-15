<?php

namespace App\Livewire;

use App\Models\Education;
use Livewire\Component;

class Educacao extends Component
{
    public $educations; // Defina a variável pública

    public function mount()
    {
        $this->educations = Education::all(); // Busque os dados no método mount
    }

    public function render()
    {
        return view('livewire.educacao'); // Não precisa passar $educations aqui, pois já está na variável pública
    }
}
