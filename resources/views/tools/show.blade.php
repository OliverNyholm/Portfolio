@extends('master')


@section('content')
<!-- Buttons for adding the tool -->

@if (Auth::check())
  <form action="{{ $tool->id }}" method="post" style="float:right">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <input type="submit" value="Delete tool" class="btn btn-danger" style="float:right">
  </form>
  <form action="{{ $tool->id }}/edit" method="get" style="float:right">
    <input type="submit" value="Edit tool" class="btn btn-info" style="float:right">
  </form>
@endif

<h1>{{ $tool->name }}</h1>
<p> Created in:
  @foreach ($tool->projects as $project)
      <a href="/projects/{{ $project->id }}">{{ $project->title }} </a>
  @endforeach
</p>
<div class="container">
  <h3>{{ $tool->description }} </h3>
</div>
<img src="{{$tool->image }}" onerror="this.src='http://i63.tinypic.com/2yoydms.png'">

@endsection
