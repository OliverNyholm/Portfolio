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
      <a href="/portfolio/1"><img src="https://www.mediabistro.com/wp-content/uploads/2016/02/tips-on-getting-your-copywriter-portfolio-started.jpg" alt="Portfolio One"></a>
      <div class="carousel-caption">
        <h3>Portfolio work one</h3>
        <p>This is very good game</p>
      </div>
    </div>

    <div class="item">
      <a href="/portfolio/2"><img src="https://www.mediabistro.com/wp-content/uploads/2016/02/tips-on-getting-your-copywriter-portfolio-started.jpg" alt="Portfolio Two"></a>
      <div class="carousel-caption">
        <h3>Portfolio work two</h3>
        <p>This is very good game too</p>
      </div>
    </div>

    <div class="item">
      <a href="/portfolio/3"><img src="https://www.mediabistro.com/wp-content/uploads/2016/02/tips-on-getting-your-copywriter-portfolio-started.jpg" alt="Portfolio Three"></a>
      <div class="carousel-caption">
        <h3>Portfolio work three</h3>
        <p>This is very good game three</p>
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
