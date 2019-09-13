
@extends('layouts.app')

@section('title', '| Category')

@section('content')

<div class="container">
<div class="row">
   <div class="col-6">

    @include('inc.mesage')

        <form action="{{ route('region.update',$region->id) }}" method="POST">
            @csrf
            @method('PATCH')
                <div class="form-group">
                  <label for="Category">Region</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Category Name" value="{{ $region->name }}">

                </div>

                <button type="submit" class="btn btn-primary">Update Region</button>
              </form>

  </div>

 <div class="col-6">





 </div>

</div>
</div>




@endsection
