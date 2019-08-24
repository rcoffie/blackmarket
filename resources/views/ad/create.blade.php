@extends('layouts.app')

@section('title', '| Create Ad')

@section('content')

 <div class="container">

  <div class="col-8">

        <form action="{{ route('') }}" method="POST"  enctype="multipart/form-data>
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add Title">

                </div>

                <div class="form-group">
                        <label for="exampleInputEmail1">Item Name</label>
                        <input name="item_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Item Name">

                </div>

                <div class="form-group row">

                        <div class="col">

                                <label for="inputState">Region</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose Region</option>
                                    @foreach ($regions as $region)
                                    <option value="{{ $region->id }}">{{ $region->name }}</option>
                                  @endforeach

                                </select>

                        </div>



                        <div class="col">

                                <label for="inputState">Category</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose Category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach


                                </select>

                        </div>
                </div>



                <div class="form-group row">

                        <div class="col">

                                <div class="form-check">
                                        <input name="negotiable" type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1"> <strong> Negotiable </strong>  </label>
                                      </div>

                        </div>



                        <div class="col">

                                <div class="form-check">
                                        <input name="condition"type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1"> <strong> Used </strong> </label>
                            </div>

                        </div>
                </div>


                <div class="form-group">
                  <label for="exampleInputPassword1">Price</label>
                  <input name="phone" type="number" class="form-control" id="exampleInputPassword1" placeholder="Price">
                </div>



                <div class="form-group">
                        <label for="exampleInputPassword1">Phone</label>
                        <input name="phone" type="number" class="form-control" id="exampleInputPassword1" placeholder="Phone">
                </div>


                <div class="form-group">
                        <label for="exampleFormControlFile1">Image</label>
                        <input name="" type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>


                <div class="form-group">
                        <label for="exampleFormControlFile1">Image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>


                <div class="form-group">
                        <label for="exampleFormControlFile1">Image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>



                <div class="form-group">
                        <label for="exampleFormControlTextarea1"> Description </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
               </div>




                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

</div>


 </div>




@endsection
