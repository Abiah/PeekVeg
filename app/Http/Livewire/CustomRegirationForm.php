<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CustomRegirationForm extends Component
{
    public $userstypes;
    
    public function render()
    {
        return view('livewire.custom-regiration-form');
    }
}
