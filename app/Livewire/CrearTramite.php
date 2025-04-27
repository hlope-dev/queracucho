<?php

namespace App\Livewire;

use App\Models\Tramite;
use Livewire\Component;

class CrearTramite extends Component

{
    public $titulo;
    public $descripcion;
    public $fecha_limite;

    protected $rules = [
        'titulo' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'fecha_limite' => 'required|date',
    ];

    public function crearTramite()
    {
        $this->validate();

        Tramite::create([
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
            'fecha_limite' => $this->fecha_limite,
            'user_id' => auth()->user()->id,
        ]);

        session()->flash('mensaje', 'Trámite creado exitosamente.');

        // Reinicia los campos del formulario
        $this->reset(['titulo', 'descripcion', 'fecha_limite']);
        // Redirige a la página de listado de trámites
        return redirect()->route('tramites.index');
    }

    public function render()
    {
        return view('livewire.crear-tramite');
    }

}
