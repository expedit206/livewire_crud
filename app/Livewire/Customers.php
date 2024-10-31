<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
class Customers extends Component
{
    public $customers=[];

    public function mount()
    {
        $this->customers =Customer::all();
        // dd($this->customers);
     }
    public function render()
    {
        return view('livewire.customers');
    }
}
