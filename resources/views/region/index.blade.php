@extends('layouts.dashboard')
@section('title','Regions')
@section('contents')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">View All Regions</li>
</ol>
<div class="container">
    <div class="row mt-10">
            <div class="col-md-10 offset-md-1">

                <h1 style="text-align: center">Add a Region</h1>
                <hr>
                {{ Form::open(['route' => 'region.store']) }}
                    {{Form::label('region_name','Name:')}}
                    {{Form::text('region_name',null,['class'=>'form-control','required'=>''])}}


                    {{Form::submit('Submit',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}
                {{ Form::close() }}
            </div>
        </div>
            <br>
    <div class="row">
        <div class="col-md-10 offset-md-1">
        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered"  width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Region Name</th>
                                <th>Action</th>
                            </tr>

                        </thead>
                        <tbody>
                            @forelse($regions as $region)
                            <tr>


                                <td>{{$region->region_name}}</td>
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
                {{$regions->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
