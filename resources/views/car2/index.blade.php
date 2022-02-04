@include('layouts.partial.header')
@extends('layouts.master')
@section('title','Car Listing')
@section('content')


<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manage Car</h1>
            <div class="section-header-breadcrumb">
                <ol class="breadcrumb bg-dark text-yellow-all">
                    <li class="breadcrumb-item"><a href="/backend/dashboard"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-car"></i>Manage Car</li>
                </ol>
            </div>
        </div>
    </section>   
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row"><!-- div class=row one start -->
                
            
            </div>
        </div>
    </div>

    
        
            <?php 
            $loginUser = Auth::user();
            if ($loginUser->role_id == 1) {
                ?>
        
            <?php
            }
            ?>
            <div class="card-body">  <!-- card-body start -->
                <table class="table">
                    <?php
                        if($loginUser->role_id == 1){
                    ?>            
                     <thead>
                        <tr>
                            <th>Brand</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Car_no</th>
                                <th>Image1</th>
                                <th>Image2</th>
                                <th>Image3</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Action</th>
                        </tr>
                        </thead>
                            <tbody>

                            @foreach($cars as $cars)
                                <tr>
                                    
                                    <td>{{ $cars->brand }}</td>
                                    <td>{{ $cars->name }}</td>
                                    <td>{{ $cars->type}}</td>
                                    <td>{{ $cars->price}}</td>
                                    <td>{{ $cars->car_no}}</td>
                                    <td><img src="../../images/{{ $cars->image1 }}" alt="img" width="50" height="50"></td>
                                    <td><img src="../../images/{{ $cars->image2 }}" alt="img" width="50" height="50"></td>
                                    <td><img src="../../images/{{ $cars->image3 }}" alt="img" width="50" height="50"></td>
                                    

                                    <td>
                                        <b>
                                        @if($cars->status == 1)
                                            <p class="text-primary">Being Rented</p>
                                        @else
                                            <p class="text-danger">Being UnRented</p>
                                        @endif
                                        </b>
                                    </td>

                                    <td><a class="btn btn-primary"  href='/backend/car/edit/{{ $cars-> car_id}}'>Edit</a></td>
                                    <td><a class="btn btn-danger" onclick="return myFunction1();" href='/backend/car/delete/{{ $cars-> car_id}}'>Delete</i></a>
                                    </td>

                                </tr>
                                @endforeach

                            </tbody>

                            <?php 
                                }            
                            ?>
                        </table>
                                
                    </div>
</div>                            


<script>
function myFunction() {
    if(!confirm("Are You Sure to update this ?"))
    event.preventDefault();
}
function myFunction1() {
    if(!confirm("Are You Sure to delete this ?"))
    event.preventDefault();
}
</script>

@section('page_script')

@stop
