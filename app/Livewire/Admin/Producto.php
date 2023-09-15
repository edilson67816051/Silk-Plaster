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
    public $id;
    
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
    public function edit($productoId){
        $this->id = $productoId;
        
        $prod = ModelsProducto::find($productoId);       
        $this->nombreproducto = $prod->producto;
        $this->unidad = $prod->unidad_medida;
        $this->stock = $prod->stock;
        
    }

    public function update(){
        $produc = ModelsProducto::find($this->id); 
        $produc->producto = $this->nombreproducto;
        $produc->unidad_medida = $this->unidad;
        $produc->stock = $this->stock;
        $produc->update();
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