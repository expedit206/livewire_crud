<div class="card">
    <div class="card-header">
     create customers
    </div>
    <div class="card-body">
        <form wire:submit="save">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" wire:model='name' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
                   <p class="alert alert-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" wire:model='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
           @error('email')
                <p class="alert alert-danger">{{ $message }}</p>
           @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone number</label>
            <input type="number " wire:model='phone' class="form-control" id="exampleInputPassword1">
            @error('phone')
                 <p class="alert alert-danger">{{ $message }}</p>
            @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button  class="btn btn-danger btn-sm" wire:navigate href="/customers" >Back</button>
            <a  class="btn btn-danger btn-sm" href="/customers" >Back</a>
          </form>
    </div>
  </div>
