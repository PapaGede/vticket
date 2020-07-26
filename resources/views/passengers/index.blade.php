@extends('layouts.dashboard')
@section('title','Passengers')
@section('contents')


<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">View All Passengers</li>
</ol>
</div>
    <div class="col-md-10 offset-md-1">
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered"  width="100%" cellspacing="0">

                    <thead>

                        <h2 style="text-align: center">List Of Passengers</h4><hr>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>phone</th>
                            <th>ID Type</th>
                            <th>ID Number</th>
                            <th>Action</th>
                        </tr>

                    </thead>
                    <tbody>
                        @forelse($passengers as $passenger)
                        <tr>
                        <td>{{$passenger->name}}</td>
                        <td>{{$passenger->email}}</td>
                        <td>{{$passenger->phone}}</td>
                        <td>{{$passenger->id_type}}</td>
                        <td>{{$passenger->id_number}}</td>
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
            {{$passengers->links()}}
        </div>
    </div>
@endsection
