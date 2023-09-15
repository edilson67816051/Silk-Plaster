<?php

namespace App\Livewire\Inventario;

use Livewire\Component;
use App\Models\Producto;

class InventarioIndex extends Component
{
    public $productos;
    public function render()
    {
        $this->productos = Producto::all();
        return view('livewire.inventario.inventario-index')->layout('layouts.admin');
    }
    
}