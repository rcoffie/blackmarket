@extends('layouts.app')

@section('title', '| Create Ad')

@section('content')

 <div class="container">

  <div class="col-8">

        <form action="{{ route('ad.store') }} " method="POST"  enctype="multipart/form-data">
            {{ csrf_field() }}


                <div class="form-group">
                        <label for="exampleInputEmail1">Item Name</label>
                        <input name="item_name" type="text" class="form-control {{ $errors->has('item_name')?'is-invalid':'' }}"  placeholder="Item Name" value="{{ $ad->item_name }}" >

                </div>

                <div class="form-group row">

                        <div class="col">

                                <label for="inputState">Region</label>
                                <select id="inputState" class="form-control  {{ $errors->has('region_id')?'is-invalid':'' }}" name="region_id" value="{{ $ad->region_name }}">
                                    <option value="">Select Region</option>
                                    @foreach ($regions as $region)
                                    <option name="region_id" value="{{ $ad->region_id }}">{{ $region->name }}</option>
                                  @endforeach

                                </select>

                        </div>



                        <div class="col">

                                <label for="inputState">Category</label>
                                <select data-live-search="true" data-live-search-style="startsWith"  class="form-control {{ $errors->has('category_id')?'is-invalid':'' }} " name="category_id" value="{{ old('category_id') }}">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                    <option  value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach


                                </select>


                        </div>
                </div>



                <div class="form-group row">

                        <div class="col">

                                <div class="form-check">
                                        <input name="negotiable" type="checkbox" class="form-check-input" value="{{ $ad->negotiable }}">
                                        <label class="form-check-label" for="exampleCheck1"> <strong> Negotiable </strong>  </label>
                                      </div>

                        </div>



                        <div class="col">

                                <div class="form-check">
                                        <input name="condition"type="checkbox" class="form-check-input" id="exampleCheck1" value="{{ $ad->condition }}">
                                        <label class="form-check-label" for="exampleCheck1"> <strong> Used </strong> </label>
                            </div>

                        </div>
                </div>


                <div class="form-group">
                  <label for="exampleInputPassword1">Phone</label>
                  <input name="phone" type="number" class="form-control  {{ $errors->has('phone')?'is-invalid':'' }}" id="exampleInputPassword1" placeholder="Phone" value="{{ $ad->phone }}" >
                </div>



                <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input name="price" type="number" class="form-control  {{ $errors->has('price')?'is-invalid':'' }}"  placeholder="Price"  value="{{ $ad->price }}">
                </div>


                <div class="form-group">
                        <label for="exampleFormControlFile1">Image</label>
                        <input name="image1" type="file" class="form-control-file  {{ $errors->has('image1')?'is-invalid':'' }}"  value="{{ $ad->image1 }}">
                </div>


                <div class="form-group">
                        <label for="exampleFormControlFile1">Image</label>
                        <input name="image2" type="file" class="form-control-file  {{ $errors->has('image2')?'is-invalid':'' }}"   value="$ad->image2">
                </div>


                <div class="form-group">
                        <label for="exampleFormControlFile1">Image</label>
                        <input name="image3" type="file" class="form-control-file   {{ $errors->has('image3')?'is-invalid':'' }}" id="exampleFormControlFile1"  value="$ad->image3">
                </div>



                <div class="form-group">
                        <label for="exampleFormControlTextarea1"> Description </label>
                        <textarea name="description" class="form-control  {{ $errors->has('description')?'is-invalid':'' }}" id="exampleFormControlTextarea1" rows="3" >  {{ $ad->description }} </textarea>
               </div>




                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

</div>


 </div>




@endsection
