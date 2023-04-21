@extends('layouts.app')

@section('content')


<div class="container pt-4">
    
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
        <th scope="col">#### </th>



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
        <td> <a href="/MyClients/Affaires/cases">->Les affaires</a> </td>


      </tr>
      @endif
      @endforeach

    </tbody>
  </table>
<div class="text-center">
    <a href="/MyClients/create" class="btn btn-outline-success fw-bold" > Add </a>
</div>




</div>
  
    
@endsection