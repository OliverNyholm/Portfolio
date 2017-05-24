
@extends('master')

@section('content')

@if (Auth::check())
<a href="/projects/create" class="btn btn-primary" style="float:right">Add new product </a>
@endif

<div class="jumbotron">
  <h1 align="center"> My Game Projects </h1>
</div>

<div class="container-fluid bg-3 text-center">
  <div class="row">
    @foreach ($projects as $project)
    <div class="col-sm-4">
      <a href="projects/{{ $project->id }}"><p>{{ $project->title }}</p>
      <img src="{{ $project->image }}" class="img-responsive" style="width:100%" alt="Image"></a>
    </div>
    @endforeach
  </div>

@endsection
