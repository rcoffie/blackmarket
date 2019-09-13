
@extends('layouts.app')

@section('title', '| Category')

@section('content')

<div class="container">
<div class="row">
   <div class="col-6">

    @include('inc.mesage')

        <form action="{{ route('region.store') }}" method="POST">
            @csrf
                <div class="form-group">
                  <label for="Category">Category</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Category Name">

                </div>

                <button type="submit" class="btn btn-primary">Add Region</button>
              </form>

  </div>

 <div class="col-6">

        <table class="table table-bordered">
                <thead>
                  <tr>

                    <th scope="col">Category Name</th>
                    <th scope="col">Action</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>

                  @foreach ($regions as $region)
                       <tr>
                         <td>{{ $region->name }}</td>
                         <td> <a href="{{ route('region.edit',$region->id) }}" class="btn btn-success " role="button" aria-disabled="true">Edit</a> </td>

                         <td>

                                <form method="POST"   onclick="return confirm('Are you sure?')" action="{{route('region.destroy',$region->id)}}">
                                        @method('DELETE')
                                        @csrf

                                        <button type="submit" class="btn btn-danger">Delete <i class="fas fa-trash"></i></button>
                                      </form>

                        </td>
                        </tr>
                  @endforeach




                </tbody>
              </table>

 </div>

</div>
</div>




@endsection
