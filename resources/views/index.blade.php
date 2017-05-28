@extends('master')


@section('content')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <!--<a href="/projects/1"><img src="https://s-media-cache-ak0.pinimg.com/originals/fe/f3/ce/fef3ce4533219ab736a314809fa6f469.jpg" alt="Limbo"></a>-->
      <a href="/projects/{{$projects[count($projects) - 3]->id}}"><img src="{{ $projects[count($projects) - 3]->image }}" alt="{{ $projects[count($projects) - 3]->title }}"></a>
      <div class="carousel-caption">
        <h3>{{ $projects[count($projects) - 3]->title }}</h3>
        <p>{{ $projects[count($projects) - 3]->description }}</p>
      </div>
    </div>

    <div class="item">
      <a href="/projects/{{$projects[count($projects) - 2]->id}}"><img src="{{ $projects[count($projects) - 2]->image }}" alt="{{ $projects[count($projects) - 2]->title }}"></a>
      <div class="carousel-caption">
        <h3>{{ $projects[count($projects) - 2]->title }}</h3>
        <p>{{ $projects[count($projects) - 2]->description }}</p>
      </div>
    </div>

    <div class="item">
      <a href="/projects/{{$projects[count($projects) - 1]->id}}"><img src="{{ $projects[count($projects) - 1]->image }}" alt="{{ $projects[count($projects) - 1]->title }}"></a>
      <div class="carousel-caption">
        <h3>{{ $projects[count($projects) - 1]->title }}</h3>
        <p>{{ $projects[count($projects) - 1]->description }}</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@endsection
