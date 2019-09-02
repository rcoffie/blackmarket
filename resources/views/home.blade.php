@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard  <button type="button" class="float-right btn-sm btn-success "> <a href="{{ url('ad/create') }}" class="text-white"> Create Add </button> </a> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!  {{ Auth::user()->name }}

                    @include('inc.mesage')
                    <table class="table table-striped">
                        <thead>
                          <tr>

                            <th scope="col">Ad</th>
                            <th scope="col">Action</th>
                            <th scope="col">Approval</th>
                          </tr>
                        </thead>
                        <tbody>

                           @foreach ($ads as $ad)

                           <tr>
                                <td> <a href="{{ route('ad.show',$ad->id) }}"> <strong> {{ $ad->item_name }}  </strong>   </a>   </td>

                                <td> <button type="button" class="btn btn-danger">Delete</button> </td>

                                <td> @if ($ad->approve == false)

                                <span class="badge badge-danger">not approved</span></td>

                                @else
                                <span class="badge badge-success">not approved</span></td>
                                @endif

                              </tr>


                           @endforeach



                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
