<?php

namespace App\Http\Livewire;

use App\Models\Ciudad;
use App\Models\Estado;
use App\Models\Pais;
use Livewire\Component;

class DropdownCiudad extends Component
{
    public $pais;
    public $estado;
    public $ciudad;

    public $selectPais ;
    public $selectEstado ;
    public $selectCiudad ;

    public function mount( $selectCiudad = null)
    {
        $this->pais = Pais::all();
        $this->estado = collect();
        $this->ciudad = collect();
        

        if (!is_null($selectCiudad)) {
            $ciudad = Ciudad::with('estado.pais')->find($selectCiudad);
            if ($ciudad) {
                $this->ciudad = Ciudad::where('estado_id', $ciudad->estado_id)->get();
                $this->estado = Estado::where('pais_id', $ciudad->estado->pais_id)->get();
                $this->selectPais = $ciudad->estado->pais_id;
                $this->selectEstado = $ciudad->estado_id;
            }
        }
    }

    public function render()
    {
        return view('livewire.dropdown-ciudad');
    }

    public function updatedSelectPais($pais)
    {
        $this->estado = Estado::where('pais_id', $pais)->get();
        $this->selectEstado = NULL;
    }

    public function updatedSelectEstado($estado)
    {
        if (!is_null($estado)) {
            $this->ciudad = Ciudad::where('estado_id', $estado)->get();
        }
    }
}