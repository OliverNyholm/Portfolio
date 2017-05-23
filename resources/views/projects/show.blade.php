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

<h1>{{$project->title }}</h1>
<p> Created in:
  @foreach ($project->tools as $tool)
      <a href="/tools/{{ $tool->id }}">{{ $tool->name }} </a>
  @endforeach
</p>
<div class="container">
  <h3>{{ $project->description }} </h3>
</div>
<img src="{{$project->image }}" onerror="this.src='http://i63.tinypic.com/2yoydms.png'">

@endsection
