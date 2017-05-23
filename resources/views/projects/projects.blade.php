@extends('master')


@section('content')

<h1>All projects</h1>
<p>Below is a list of all projects:</p>


@foreach ($projects as $project)
    <a href="projects/{{ $project->id }}"><h2>{{ $project->title }}</h2><img src="{{$project->image }}" onerror="this.src='http://i63.tinypic.com/2yoydms.png'"></a>
@endforeach

@endsection
