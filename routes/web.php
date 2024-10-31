<?php
use App\Livewire\CreateCustomer;
use App\Livewire\Customers;
use App\Livewire\ViewCustomers;
use App\Livewire\EditCustomers;
use App\Livewire\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::middleware('auth')->prefix('customers')->group(function(){

    Route::get('/create', CreateCustomer::class);
    Route::get('/', Customers::class);
    Route::get('/{customer}', ViewCustomers::class);
    Route::get('/{customer}/edit', EditCustomers::class);
})

Route::get('/register', Register::class);
