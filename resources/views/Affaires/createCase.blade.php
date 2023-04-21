@extends('layouts.app')
@section('content')


<form class="add-case-form" action="/MyClients/Affaires/cases" method="POST" >@csrf
  <h2 class="fw-bold">Add a New Case</h2>
  <div class="form-group">
    <label for="case-name">Case Name</label>
    <input type="text"  name="name" required>
  </div>
  <div class="form-group">
    <label for="case-description">Case Description</label>
    <textarea  name="Description" required></textarea>
  </div>
  <div class="form-group">
    <label for="case-status">Case Status</label>
    <select  name="status" required>
      <option value="">Select Status</option>
      <option value="In Progress">In Progress</option>
      <option value="Completed">Completed</option>
    </select>
  </div>
  <div class="text-center" >
    <button type="submit" class="btn btn-outline-primary">Submit</button>

  </div>
</form>

<style>

.add-case-form {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.add-case-form h2 {
  text-align: center;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

.form-group input,
.form-group textarea,
.form-group select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.form-group textarea {
  height: 150px;
}


</style>
@endsection
