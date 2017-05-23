@extends('master')


@section('content')

@if (Auth::check())
<a href="/tools/create" class="btn btn-primary" style="float:right">Add new product </a>
@endif
<h1>All tools</h1>
<p>Below is a list of all tools:</p>


@foreach ($tools as $tool)
    <a href="tools/{{ $tool->id }}"><h2>{{ $tool->name }}</h2>
    <img style="height:auto;max-width:500px;width: expression(this.width > 500 ? 500: true);" src="{{$tool->image }}" onerror="this.src='http://i63.tinypic.com/2yoydms.png'"></a>
@endforeach

@endsection
