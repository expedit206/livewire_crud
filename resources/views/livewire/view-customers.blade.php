<div class="card offset-3 " >
    <div class="card-header">
      View customer
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$customer->name}}</h5>
      <p class="card-text">{{$customer->email}}</p>
      <p class="card-text">{{$customer->phone}}</p>
      <a href="/customers" wire:navigate class="btn btn-primary">Go back</a>
    </div>
  </div>