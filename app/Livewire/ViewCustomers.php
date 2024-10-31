<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\customer;
class ViewCustomers extends Component
{
    public $customer=[];

    public function mount(Customer $customer)
    {
        $this->customer = $customer;
    }
    public function render()
    {
        return view('livewire.view-customers');
    }
}
