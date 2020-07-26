@extends('layouts.dashboard')
@section('title','Buses')
@section('contents')


<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">View All Buses</li>
</ol>
</div>
    <div class="col-md-10 offset-md-1">
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered"  width="100%" cellspacing="0">

                    <thead>
                        <div class="col-md-3 offset-md-7">
                            <a class="btn btn btn-primary" style="position: relative;top:40px;left:40px;" href="{{route('buses.create')}}">Add Bus</a>
                        </div>
                        <h2 style="text-align: center">List Of Buses</h4><hr>
                        <tr>
                            <th>Bus Name</th>
                            <th>Seat Number</th>
                            <th>Availability</th>
                            <th>Action</th>
                        </tr>

                    </thead>
                    <tbody>
                        @forelse($buses as $bus)
                        <tr>


                            <td>{{$bus->bus_name}}</td>
                            <td>{{$bus->seats}}</td>
                            <td><a href="" class="btn btn-sm {{($bus->isAvailable) ? 'btn-success':'btn-danger'}}">{{($bus->isAvailable) ? 'Available':'Not Available'}}</a></td>
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
            {{$buses->links()}}
        </div>
    </div>
@endsection
