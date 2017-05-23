@extends('master')

@section('content')

<h1>Add a new project</h1>

<form action="/projects" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Add the title here..." required>
  </div>
  <div class="form-group">
    <label for="image">Link for project image</label>
    <input type="text" class="form-control" id="image" name="image" placeholder="Add the image link here..." required>
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description" placeholder="Add a description about project here..." required>
  </div>
  <div class="form-group">
    <h4> Created in: </h4>
    <div class="checkbox">
        <label><input type="checkbox" name="tools[]" value="1"> Unreal Engine </label>
    </div>
    <div class="checkbox">
        <label><input type="checkbox" name="tools[]" value="2"> Unity </label>
    </div>
    <div class="checkbox">
        <label><input type="checkbox" name="tools[]" value="2"> Monogames </label>
    </div>
  </div>
  <input type="submit" value="Save project" class="btn btn-success">
</form>


@endsection
