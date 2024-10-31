<div>
<button href="/customers/create" wire:navigate class="btn btn-success">Create</button>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($customers as $customer )

      <tr>
        <th scope="row">{{ $customer->id }}</th>
        <td>{{ $customer->name }}</td>
        <td>{{ $customer->email }}</td>
        <td>{{ $customer->phone }}</td>
        <td>
            <button class="btn btn-primary" wire:navigate href="/customers/{{$customer->id}}">View</button>
            <button class="btn btn-secondary" wire:navigate href="/customers/{{$customer->id}}/edit">Edit</button>
            <button class="btn btn-danger">Delete</button>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
