<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Producto extends Component
{
    public function render()
    {
        return view('livewire.admin.producto')->layout('layouts.admin');
    }
}