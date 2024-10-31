<div class="card offset-3">
    <div class="card-header">
     Register user
    </div>
    <div class="card-body">
        <form wire:submit="storeUser">
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
            <label for="exampleInputPassword1" class="form-label">Password  </label>
            <input type="number " wire:model='password' class="form-control" id="exampleInputPassword1">
            @error('password')
                 <p class="alert alert-danger">{{ $message }}</p>
            @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <div class="mb-3">
               Already have an account? <button wire:navigate href='/login ' class="btn btn-success">Login</button>
          </div>
    </div>
  </div>
