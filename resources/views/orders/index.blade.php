@extends('layouts.dashboard')
@section('title','Ordres')
@section('contents')


<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">View All Trips Order</li>
</ol>
</div>
    <div class="col-md-10 offset-md-1">
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered"  width="100%" cellspacing="0">

                    <thead>

                        <h2 style="text-align: center">List Of Trips Order</h4><hr>
                        <tr>
                            <th>Customer Name</th>
                            <th>Source</th>
                            <th>Destination</th>
                            <th>Bus Type</th>
                            <th>Fare</th>
                            <th>Action</th>
                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                        <td>Stephen Asante</td>
                        <td>Accra</td>
                        <td>Takoradi</td>
                        <td>Vip Bus</td>
                        <td>80.0</td>
                        <td><a href="" class="btn btn-danger">Delete</a></td>
                    </tr>
                        <tr>
                        <td>Derrick Annang</td>
                        <td>Kumasi</td>
                        <td>Goaso</td>
                        <td>STC</td>
                        <td>60.0</td>
                        <td><a href="" class="btn btn-danger">Delete</a></td>
                    </tr>
                        <tr>
                        <td>Nana Kwame Addo</td>
                        <td>Ho</td>
                        <td>Wa</td>
                        <td>VIP</td>
                        <td>70.0</td>
                        <td><a href="" class="btn btn-danger">Delete</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
