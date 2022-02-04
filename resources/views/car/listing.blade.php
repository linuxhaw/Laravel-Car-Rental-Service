@include('layouts.partial.header')
@extends('layouts.master')
@section('title','Cars Listing')
@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Cars Listing</h1>
            <div class="section-header-breadcrumb">
                <ol class="breadcrumb bg-dark text-yellow-all">
                    <li class="breadcrumb-item"><a href="/backend/dashboard"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-car"></i>Customer</li>
                </ol>
            </div>
        </div>
        </section>   
       
                
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Owner name</th>
                          <th scope="col">Brand</th>
                          <th scope="col">Name</th>
                          <th scope="col">Type</th>
                          <th scope="col">Price</th>
                          <th scope="col">Car no</th>
                          <th scope="col">Status</th>
                          <th scope="col">Image</th>
                          <th scope="col">Registration Date</th>
                          <th scope="col">Updated Date</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php $no=1; ?>
                          @foreach ($cars as $cars)
                                    <tr>
                                        <th>{{ $no++}}</th>
                                        <td>{{ $cars->user_name }}</td>
                                        <td>{{ $cars->brand }}</td>
                                        <td>{{ $cars->name }}</td>
                                        <td>{{ $cars->type }}</td>
                                        <td>{{ $cars->price }}</td>
                                        <td>{{ $cars->car_no }}</td>
                                        <td>{{ $cars->status }}</td>
                                        <td><img src="../../images/{{ $cars->image1 }}" alt="img" width="50" height="50"></td>
                                        <td>{{ $cars->created_at }}</td>
                                        <td>{{ $cars->updated_at }}</td>
                                    </tr>

                                  
                                    @endforeach
                            
                      </tbody>
                    </table>
                   
        
    
</div>

