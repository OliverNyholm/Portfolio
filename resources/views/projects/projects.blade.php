@extends('master')


@section('content')

@if (Auth::check())
<a href="/projects/create" class="btn btn-primary" style="float:right">Add new product </a>
@endif
<h1>All projects</h1>
<p>Below is a list of all projects:</p>


@foreach ($projects as $project)
    <a href="projects/{{ $project->id }}"><h2>{{ $project->title }}</h2>
    <img style="height:auto;max-width:500px;width: expression(this.width > 500 ? 500: true);" src="{{$project->image }}" onerror="this.src='http://i63.tinypic.com/2yoydms.png'"></a>
@endforeach

@endsection
