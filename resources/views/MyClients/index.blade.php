@extends('layouts.app')

@section('content')
<div class="container pt-4">
<<<<<<< HEAD
    <h2 class="text-decoration-underline fw-bolder p-4">List of My Clients</h2>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Status</th>
                <th scope="col">Sex</th>
                <th scope="col">Case</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $item)
            @if(Auth::user()->id == $item->user_id)
            <tr>
                <th>{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->lastName}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->sex}}</td>
                <td>{{$item->status}}</td>
                <td>{{$item->titleOfTheCase}}</td>
                <td class="d-flex justify-content-between">
                    <form action="{{ route('clients.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger fw-bold">
                            <i class="bi bi-trash"></i> Delete
                        </button>
                    </form>
                    <a href="{{ route('clients.edit', $item->id) }}" class="btn btn-outline-primary fw-bold">
                        <i class="bi bi-pencil"></i> Edit
                    </a>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        <a href="/MyClients/create" class="btn btn-outline-success fw-bold">Add</a>
    </div>
=======
    
<h2 class="text-decoration-underline fw-bolder p-4">List of My Clients</h2>


<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col ">#</th>
        <th scope="col">Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Status</th>
        <th scope="col">Sex</th>
        <th scope="col">Case </th>



      </tr>
    </thead>
    <tbody>
         @foreach ($clients as $item)
         @if(Auth::user()->id == $item->user_id)
      <tr>
       

        <th >{{$item->id}}</th>
        <td>{{$item->name}}  </td>
        <td>{{$item->lastName}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->sex}}</td>
        <td>{{$item->status}}</td>
        <td>{{$item->titleOfTheCase}}</td>


      </tr>
      @endif
      @endforeach

    </tbody>
  </table>
<div class="text-center">
    <a href="/MyClients/create" class="btn btn-outline-success fw-bold" data-client-id="123" > +Add </a>
    <a href="/MyClients/Affaires/cases" class="btn btn-outline-info fw-bold">->les Affaires</a>

>>>>>>> 093b66013b663873ce3d5d12c9d09f2214d331b5
</div>
@endsection

<<<<<<< HEAD
=======



</div>

<script>
  const clientLink = document.getElementById('client-link');

  clientLink.addEventListener('click', function(event) {
    event.preventDefault();
    const clientId = clientLink.getAttribute('data-client-id');
    window.location.href = '/clients/' + clientId + '/cases';
  });
</script>

  
    
@endsection
>>>>>>> 093b66013b663873ce3d5d12c9d09f2214d331b5
