@extends('layouts.app')

@section('content')
<h1 class="text-center fw-bolder p-4" >Welcome to Avocat </h1>

<div class="container">
    <div class="row">
        <div class="p-4 col-md-4 ">
            <div  class="card  ">
                <div class="card-header">
                    <h2 class="text-center"> breaking news today </h2>
                </div>
                <div class="card-body text-center">
                    <p> View the latest news and breaking news today for U.S.,
                         world, weather, entertainment, politics and health at CNN.com.  </p>
                         <button class="btn btn-outline-primary text-center">Read More </button>
                </div>
    
    
            </div>

        </div>
      
        <div class="col-md-4 p-4">
        <div  class="card  ">
            <div class="card-header">
                <h2 class="text-center"> My Clients </h2>
            </div>
            <div class="card-body ">
                <h4> click here if you want to see your clients and the progress of each case of each client   </h4>
                <div class="text-center">
                    <button class="btn btn-outline-primary text-center">See Your Clients </button>

                 </div>            </div>


        </div>
    </div>
        <div class="p-4 col-md-4 ">
            <div  class="card  ">
                <div class="card-header">
                    <h2 class="text-center"> breaking news today </h2>
                </div>
                <div class="card-body ">
                    <p> View the latest news and breaking news today for U.S.,
                         world, weather, entertainment, politics and health at CNN.com.  </p>
                         <div class="text-center">
                            <button class="btn btn-outline-primary text-center">Read More </button>

                         </div>
                </div>
    
    
            </div>

        </div>


    </div>
</div>

    
@endsection