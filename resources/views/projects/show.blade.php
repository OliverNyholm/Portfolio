@extends('master')


@section('content')
<!-- Buttons for adding the project -->

@if (Auth::check())
  <form action="{{ $project->id }}" method="post" style="float:right">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <input type="submit" value="Delete project" class="btn btn-danger" style="float:right">
  </form>
  <form action="{{ $project->id }}/edit" method="get" style="float:right">
    <input type="submit" value="Edit project" class="btn btn-info" style="float:right">
  </form>
@endif
<a href="/reviews/create?project_id={{ $project->id }}" class="btn btn-primary" style="float:right">Add new review </a>

<h1>{{$project->title }}</h1>
<p>{{ $project->developer }}</p>
<p>Price: {{ $project->price }}</p>
<p> Created in:
  @foreach ($project->tools as $tool)
      <a href="/tools/{{ $tool->id }}">{{ $tool->title }} </a>
  @endforeach
</p>
<div class="container">
  <h3>{{ $project->description }} </h3>
</div>
<img src="{{$project->image }}" onerror="this.src='http://i63.tinypic.com/2yoydms.png'">

@endsection
