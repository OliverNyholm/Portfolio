@extends('master')


@section('content')

@if (Auth::check())
<a href="/courses/create" class="btn btn-primary" style="float:right">Add new product </a>
@endif
<h1>All courses</h1>
<p>Below is a list of all courses:</p>


@foreach ($courses as $course)
    <a href="courses/{{ $course->id }}"><h2>{{ $course->name }}</h2>
@endforeach

@endsection
