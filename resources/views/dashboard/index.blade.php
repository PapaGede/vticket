@extends('layouts.dashboard')
@section('content')
@section('name','Dashboard')
@section('contents')

<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">All Incoming Information</li>
</ol>
<div class="row">
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Prices Chart For The Month</div>
            <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Bar Chart Representation</div>
            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
        </div>
    </div>


@endsection
