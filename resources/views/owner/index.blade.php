@include('layouts.partial.header')
@extends('layouts.master')
@section('title','Owner Listing')
@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Owner Listing</h1>
            <div class="section-header-breadcrumb">
                <ol class="breadcrumb bg-dark text-yellow-all">
                    <li class="breadcrumb-item"><a href="/backend/dashboard"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-car"></i> Car Owner</li>
                </ol>
            </div>
        </div>
        </section>   
       
                
                    <table class="table" width="100%">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">name</th>
                          <th scope="col">email</th>
                          <th scope="col">NRC</th>
                          <th scope="col">Phone Number</th>
                          <th scope="col">Registration Date</th>
                          <th scope="col">Updated date</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php $no=1; ?>
                        @foreach ($objs as $obj)
                            
                            <tr>
                                <th scope="row">{{$no++}}</th>
                                <td>{{ $obj->name }}</td>
                                <td>{{ $obj->email }}</td>
                                <td>{{ $obj->NRC }}</td>
                                <td>{{ $obj->phone_number }}</td>
                                <td>{{ $obj->created_at }}</td>
                                <td>{{ $obj->updated_at }}</td>
                            <tr>
                                
                                
                        @endforeach
                      </tbody>
                    </table>
                   
        
    
</div>

