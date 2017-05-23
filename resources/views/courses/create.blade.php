@extends('master')

@section('content')

<h1>Add a new course</h1>

<form action="/courses" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Add the name here..." required>
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description" placeholder="Add a description about course here..." required>
  </div>
  <input type="submit" value="Save course" class="btn btn-success">
</form>


@endsection
