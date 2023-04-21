@extends('layouts.app')

@section('content')
<div class="container pt-3">

<div class="card p-4">

<div class="container">
    <h1 class="fw-bolder text-center text-decoration-underline p-4" >Add Client</h1>


    <form action="/MyClients" method="POST"> @csrf
        <div class="row mb-3">
          <div class="col-md-3">
            <label for="name" class="form-label d-inline-block text-md-end">Name</label>
          </div>
          <div class="col-md-9">
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-3">
            <label for="lastName" class="form-label d-inline-block text-md-end">Last Name</label>
          </div>
          <div class="col-md-9">
            <input type="text" class="form-control" id="lastName" name="LastName" required>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-3">
            <label for="status" class="form-label d-inline-block text-md-end">Status</label>
          </div>
          <div class="col-md-9">
            <select class="form-select" id="status" name="status" required>
              <option value="">Select status</option>
              <option value="Single">Single</option>
              <option value="Married">Married</option>
              <option value="Divorced">Divorced</option>
              <option value="Widowed">Widowed</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-3">
            <label for="email" class="form-label d-inline-block text-md-end">Email address</label>
          </div>
          <div class="col-md-9">
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-3">
            <label for="phone" class="form-label d-inline-block text-md-end">Phone</label>
          </div>
          <div class="col-md-9">
            <input type="tel" class="form-control" id="phone" name="phone" required>
          </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-3">
              <label for="phone" class="form-label d-inline-block text-md-end">Case Title</label>
            </div>
            <div class="col-md-9">
              <input type="tel" class="form-control" id="case" name="titleOfTheCase" required>
            </div>
          </div>
        <div class="row mb-3">
          <div class="col-md-3">
            <label for="sex" class="form-label d-inline-block text-md-end">Sex</label>
          </div>
          <div class="col-md-9">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sex" id="male" value="Male" required>
              <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sex" id="female" value="Female" required>
              <label class="form-check-label" for="female">Female</label>
            </div>
          </div>
        </div>
        <div class="text-center">
        <button type="submit" class="btn btn-outline-primary">Submit</button>

        </div>
      </form>
    </div>
  
      
</div>
</div>


@endsection