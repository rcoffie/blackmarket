
@extends('layouts.app')

@section('title', '| Category')

@section('content')

<div class="container">
<div class="row">
   <div class="col-6">

    @include('inc.mesage')

        <form action="{{ route('category.store') }}" method="POST">
            @csrf
                <div class="form-group">
                  <label for="Category">Category</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Category Name">

                </div>

                <button type="submit" class="btn btn-primary">Add Category</button>
              </form>

  </div>

 <div class="col-6">

        <table class="table table-bordered">
                <thead>
                  <tr>

                    <th scope="col">Category Name</th>

                  </tr>
                </thead>
                <tbody>

                  @foreach ($categories as $category)
                       <tr>
                         <td>{{ $category->name }}</td>
                        </tr>
                  @endforeach




                </tbody>
              </table>

 </div>

</div>
</div>




@endsection
