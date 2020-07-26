@extends('layouts.dashboard')
@section('title','Bus')
@section('contents')
<ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('buses.index')}}">All Buses</a></li>
        <li class="breadcrumb-item active">Create Bus</li>
</ol>

<div class="container">

    <div class="row mt-10">
        <div class="col-md-10 offset-md-1">

            <h1 style="text-align: center">Add a Trip</h1>
            <hr>
            {{ Form::open(['route' => 'buses.store']) }}

                {{Form::label('bus_name','Bus Name:')}}
                {{Form::text('bus_name',null,['class'=>'form-control','required'=>''])}}


                {{Form::label('seats','Number Of Seats:')}}
                {{Form::number('seats',null,['class'=>'form-control','required'=>''])}}


                {{Form::submit('Submit',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}
            {{ Form::close() }}
        </div>
    </div>
</div>

@endsection
