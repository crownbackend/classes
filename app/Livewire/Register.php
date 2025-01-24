<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    #[Validate('required|string|min:2')]
    public string $name;

    #[Validate('required|email')]
    public string $email;

    #[Validate('required')]
    public string $password;
    #[Validate('required|date')]
    public string $birthday;

    public function save()
    {
        $this->validate();
        dd($this->name, $this->email, $this->password, $this->birthday);
    }

    public function render()
    {
        return view('livewire.register');
    }
}
