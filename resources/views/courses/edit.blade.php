@extends('master')

@section('content')

<h1>Edit {{$course->name}}</h1>

<form action="/courses/{{$course->id}}" method="post">
  {{ method_field('PUT') }}
  {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $course->name }}" placeholder="Add the name here...">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description" value="{{ $course->description }}" placeholder="Add the description here...">
  </div>
  <input type="submit" value="Save changes" class="btn btn-success">
</form>


@endsection
