@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
<div class="col-8">


        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width:600px;height:500px;" >
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('images/'.$ad->image1) }}" alt="image1" style="width:auto;height:500px;" >
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/'.$ad->image2) }}" alt="Second slide" style="width:auto;height:500px;" >
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/'.$ad->image3) }}" alt="Third slide" style="width:auto;height:500px;" >
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




              <h4 class=" text-primary m-2">   {{ $ad->item_name }}  </h4>

                    <p> {{ $ad->description }}  </p>


                   @if ($ad->negotiable != false)
                     <span>Negotiable</span>
                  @endif

                  @if ($ad->condition == false)

                  <span class=" p-2"> <strong>Condition: Used </strong> </span>

                  @endif
                   <div class="clearfix mt-2">
                         <span class="float-left bg-success p-2 text-white"> GH₵ {{ $ad->price }}</span>
                         <span class="float-right bg-success p-2 text-white"> {{ $ad->phone }} </span>
                       </div>






</div>
<div class="col-2">


</div>

</div>

</div>
@endsection
