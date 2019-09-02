@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
<div class="col-8">
<div class="row">

<div class="col-6">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('images/'.$ad->image1) }}" alt="image1">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/'.$ad->image2) }}" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/'.$ad->image3) }}" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
</div>

<div class="col-6">
     <h4 class=" text-primary">   {{ $ad->item_name }}  </h4>

     <div class="card">
            <div class="card-body">
             {{ $ad->description }}
            </div>
          </div>
          <div class="clearfix mt-2">
                <span class="float-left bg-success p-2">{{ $ad->price }}</span>
                <span class="float-right">  </span>
              </div>

</div>

</div>


</div>
<div class="col-4">


</div>

</div>

</div>
@endsection
