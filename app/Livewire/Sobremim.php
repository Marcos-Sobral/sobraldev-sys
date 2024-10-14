<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Sobremim extends Component
{
    public function render()
    {
        $users = User::with('Education')->get();
        return view('livewire.sobremim', compact('users'));
    }
}
