<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class CreateCustomer extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public function render()
    {
        return view('livewire.create-customer');
    }

    public function save()
    {
        $validated = $this->validate([
            'name'=>'required',
            'email'=>'required|unique:customers',
            'phone'=>'required|unique:customers'
        ]);
        Customer::create($validated);
        return $this->redirect('/customers',navigate:true);

        // $this->reset();
     }
}
