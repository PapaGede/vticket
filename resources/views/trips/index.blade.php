@extends('layouts.dashboard')
@section('title','Trips')

@section('contents')
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">View all Trips</li>
    </ol>

    <div class="row">
</div>
</div>
    <div class="col-md-10 offset-md-1">
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered"  width="100%" cellspacing="0">

                    <thead>
                        <div class="col-md-3 offset-md-7">
                            <a class="btn btn btn-primary" style="position: relative;top:40px;left:40px;" href="{{route('trips.create')}}">Create Trip</a>
                        </div>
                        <h2 style="text-align: center">List Of Trips</h4><hr>
                        <tr>
                            <th>Trip Name</th>
                            <th>Destination</th>
                            <th>Fare</th>
                            <th>Action</th>
                        </tr>

                    </thead>
                    <tbody>
                        @forelse($trips as $trip)
                        <tr>


                            <td>{{$trip->trip_name}}</td>
                            <td>{{$trip->region->region_name}}</td>
                            <td>GH {{$trip->fare}}</td>
                            <td>
                                <a href="" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> Delete </a>
                            </td>

                        </tr>


                            @empty
                            <p>no datat</p>
                            @endforelse
                    </tbody>
                </table>
            </div>
            {{$trips->links()}}
        </div>
    </div>

@endsection
