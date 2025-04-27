<?php

namespace App\Livewire;

use App\Models\Tramite;
use Livewire\Component;

class MostrarTramites extends Component
{
    public function render()
    {
        $tramites = Tramite::where('user_id', auth()->user()->id)->paginate(5);
        return view('livewire.mostrar-tramites', [
            'tramites' => $tramites,
        ]);
    }
}
