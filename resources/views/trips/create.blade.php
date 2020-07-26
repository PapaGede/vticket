@extends('layouts.dashboard')
@section('title','Trips')

@section('contents')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{route('trips.index')}}">All Trips</a></li>
    <li class="breadcrumb-item active">Create Trip</li>
</ol>

<div class="container">

    <div class="row mt-10">
        <div class="col-md-10 offset-md-1">

            <h1 style="text-align: center">Add a Trip</h1>
            <hr>
            {{ Form::open(['route' => 'trips.store']) }}

                {{Form::label('region_id','From:')}}
                {{Form::select('region_id',$regions,null,['class'=>'form-control','required'=>''])}}


                {{Form::label('fare','Fare:')}}
                {{Form::number('fare',null,['class'=>'form-control','required'=>''])}}

                {{Form::label('trip_name','To:')}}
                {{Form::text('trip_name',null,['class'=>'form-control','required'=>''])}}

                {{Form::submit('Submit',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection
