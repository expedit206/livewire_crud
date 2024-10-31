<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;


class EditCustomers extends Component
{   
    public $customer;
    public $name ;
    public $email ;
    public $phone ;

    public function mount(Customer $customer)
    {
        $this->customer = $customer;
        $this->name = $customer->name;
        $this->email = $customer->email;
        $this->phone = $customer->phone;

    }

    public function render()
    {
        return view('livewire.edit-customers');
    }

    public function update()
    {
        $validated = $this->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required '
        ]);

        $this->customer->update($validated);
        session()->flash('success', 'customer updated sucessfull');

        return $this->redirect('/customers',navigate:true);
        // return $this->redirect('/customers');,


    }
}
