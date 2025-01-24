<?php

namespace App\Livewire;

use Livewire\Component;

class FormInput extends Component
{
    public $type = 'text'; // Type de champ (texte, email, password, etc.)
    public $name; // Nom du champ
    public $label; // Label du champ
    public $placeholder; // Placeholder du champ
    public $value; // Valeur du champ
    public $required = false; // Champ obligatoire ou non
    public function render()
    {
        return view('livewire.form-input');
    }
}
