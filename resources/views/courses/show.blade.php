@extends('master')


@section('content')

<!-- Buttons for adding the course -->
@if (Auth::check())
  <form action="{{ $course->id }}" method="post" style="float:right">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <input type="submit" value="Delete course" class="btn btn-danger" style="float:right">
  </form>
  <form action="{{ $course->id }}/edit" method="get" style="float:right">
    <input type="submit" value="Edit course" class="btn btn-info" style="float:right">
  </form>
@endif

<h1>{{ $course->name }}</h1>
<div class="container">
  <h3>{{ $course->description }} </h3>
</div>

<h2> Game created during this course: </h2>
  @foreach ($course->projects as $project)
      <h3><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></h3>
      <img style="height:auto;max-width:500px;width: expression(this.width > 500 ? 500: true);" src="{{$project->image }}" onerror="this.src='http://i63.tinypic.com/2yoydms.png'">

  @endforeach
@endsection
