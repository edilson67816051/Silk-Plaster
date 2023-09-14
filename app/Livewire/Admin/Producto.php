<?php

namespace App\Livewire\Admin;

use App\Models\Producto as ModelsProducto;
use Livewire\Component;

class Producto extends Component
{
    public $productos;
    
    public $nombreproducto ="";
    public $unidad ="";
    public $stock;

    public function mount()
    {
        $this->productos = ModelsProducto::all();
    }
    
    public function render()
    {
        return view('livewire.admin.producto')->layout('layouts.admin');
    }

    public function store(){
        $produc = new ModelsProducto();
        
        $produc->producto = $this->nombreproducto;
        $produc->unidad_medida = $this->unidad;
        $produc->stock = $this->stock;
        $produc->save();
        
    }
}