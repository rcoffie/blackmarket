@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-4 ">

                <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                      </ul>

        </div>
        <div class="col-8 border border-secondary p-2">

            @foreach ($ads as $ad)


            <div class="card mb-3" style="max-width: ">
                    <div class="row no-gutters">
                      <div class="col-md-5">
                     <a href=" {{ route('ad.show',$ad->id) }} "> <img src="{{ asset('images/'.$ad->image1) }}" class="card-img" alt="..."> </a>
                      </div>
                      <div class="col-md-7">
                          <a href="{{ route('ad.show',$ad->id) }}">
                        <div class="card-body">
                          <h5 class="card-title">{{ $ad->item_name }}</h5>
                          <p class="card-text">{{ $ad->description }}</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </a>
                      </div>
                    </div>
                  </div>

                      @endforeach

        </div>
    </div>
</div>

@endsection
