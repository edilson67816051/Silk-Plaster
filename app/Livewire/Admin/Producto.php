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
    
    public function render()
    {
        $this->productos = ModelsProducto::all();
        return view('livewire.admin.producto')->layout('layouts.admin');
    }

    public function store(){
        $produc = new ModelsProducto();
        
        $produc->producto = $this->nombreproducto;
        $produc->unidad_medida = $this->unidad;
        $produc->stock = $this->stock;
        $produc->save();
        $this->clear();
        
    }

    public function clear(){
        $this->nombreproducto = '';
        $this->unidad = '';
        $this->stock = 0;
    }

    public function delete($productoId){
        $prod = ModelsProducto::find($productoId);
        $prod->delete();
    }
}