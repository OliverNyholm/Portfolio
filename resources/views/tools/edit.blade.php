@extends('master')

@section('content')

<h1>Edit {{$tool->name}}</h1>

<form action="/tools/{{ $tool->id }}" method="post">
  {{ method_field('PUT') }}
  {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $tool->name }}" placeholder="Add the name here...">
  </div>
  <div class="form-group">
    <label for="image">Link for tool image</label>
    <input type="text" class="form-control" id="image" name="image" value="{{ $tool->image }}" placeholder="Add the image here...">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description" value="{{ $tool->description }}" placeholder="Add the description here...">
  </div>
  <input type="submit" value="Save changes" class="btn btn-success">
</form>


@endsection
