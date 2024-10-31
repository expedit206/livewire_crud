<?php

namespace App\Livewire;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    
    public $name;
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.register');
    }

    public function storeUser()
    {
        $validated = $this->validate([
            'name'=>'required',
            'email'=>'required|unique:customers',
            'password'=>'required'
        ]);

        $user = User::create($validated);

        Auth::login($user);
        return $this->redirect('/customers', navigate:true);
    }
}
