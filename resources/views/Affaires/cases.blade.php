@extends('layouts.app')

@section('content')
<!--
<div class="container">
    <div class="row">
      <div class="col-12">
        <div class="cases-container">
          <h2 class="cases-heading">Les Affaires</h2>
          <ul class="cases-list">
            <li class="case">
              <div class="case-header">
                <h3 class="case-title">Case Name 1</h3>
                <span class="case-status in-progress">In Progress</span>
              </div>
              <div class="case-body">
                <p class="case-details">Case details and description go here...</p>
              </div>
              <div class="case-footer">
                <a href="#" class="btn btn-primary btn-edit">Edit</a>
              </div>
            </li>
            <li class="case">
              <div class="case-header">
                <h3 class="case-title">Case Name 2</h3>
                <span class="case-status completed">Completed</span>
              </div>
              <div class="case-body">
                <p class="case-details">Case details and description go here...</p>
              </div>
              <div class="case-footer">
                <a href="#" class="btn btn-primary btn-edit">Edit</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
-->


<!-- <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card-deck">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Smith v. Johnson</h3>
              <h6 class="card-subtitle mb-2 text-muted">In Progress</h6>
              <p class="card-text">Civil lawsuit filed by Smith against Johnson over breach of contract, settled in favor of Smith in Q4 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam molestiae, mollitia maxime natus fugit rem eligendi sed, sapiente ratione quis praesentium ea quae delectus dolor tempora minima, excepturi asperiores ullam.</p>
              <a href="#" class="btn btn-primary">Edit</a>
            </div>
          </div>
          <br>
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">State v. Wilson</h3>
              <h6 class="card-subtitle mb-2 text-muted">Completed</h6>
              <p class="card-text">Criminal case against Wilson for embezzlement, trial scheduled for Q2.</p>
              <a href="#" class="btn btn-primary">Edit</a>
            </div>
          </div>
        </div>
      </div>
    </div>
<br>

     <div class="card">
  <div class="card-body">
    <h3 class="card-title">$item->name</h3>
    <h6 class="card-subtitle mb-2 text-muted">Completed</h6>
    <p class="card-text">Criminal case against Wilson for embezzlement, trial scheduled for Q2.</p>
    <a href="#" class="btn btn-primary">Edit</a>
  </div>
</div>
</div>
</div>
</div>
 

  </div>-->
@foreach ($affaires as $item)


  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card-deck">
          <div class="card">
            <div class="card-body">
              <div class="row" >
                <div class="col"> 
                  <h3 class="card-title fw-bold">{{$item->Name}}</h3>

                </div>
                 <div class="col"> 
                  <h3 class="card-title text-danger fw-bold text-decoration-underline">{{$item->client->name}} {{$item->client->lastName}}</h3>

                </div>

           </div>
              <h6 class="card-subtitle mb-2 text-muted">{{$item->status}}</h6>
              <p class="card-text"> {{$item->Description}} </p>
              <a href="#" class="btn btn-primary">Edit</a>
            </div>
          </div>
          
          <br>
          @endforeach

<div class="text-center">
  <a href="/MyClients/Affaires/createCase" class="btn btn-outline-success p-3"> Add </a>
</div>

  
@endsection