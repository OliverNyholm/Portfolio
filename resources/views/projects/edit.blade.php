@extends('master')

@section('content')

<h1>Edit {{$project->title}}</h1>

<form action="/projects/{{ $project->id }}" method="post">
  {{ method_field('PUT') }}
  {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}" placeholder="Add the title here...">
  </div>
  <div class="form-group">
    <label for="image">Link for project image</label>
    <input type="text" class="form-control" id="image" name="image" value="{{ $project->image }}" placeholder="Add the image here...">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description" value="{{ $project->description }}" placeholder="Add the description here...">
  </div>
  <input type="submit" value="Save changes" class="btn btn-success">
</form>


@endsection
