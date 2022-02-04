@include('layouts.partial.header')
@extends('layouts.master')
@section('title','Owner Listing')
@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Car Rent Listing</h1>
            <div class="section-header-breadcrumb">
                <ol class="breadcrumb bg-dark text-yellow-all">
                    <li class="breadcrumb-item"><a href="/backend/dashboard"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-car"></i> Customer</li>
                </ol>
            </div>
        </div>

                        
                        
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Customer Name</th>
                                        <th>Cars Name</th>
                                        <th>Rental Status</th>
                                        <th>PickUp Date</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($car_rent as $car_rent)
                                    <tr>
                                        <td>{{ $car_rent->user_name }}</td>
                                        <td>{{ $car_rent->car_name }}</td>
                                        <td>
                                        <b>
                                            <?php
                                        $tdydate = date('Y-m-d H:i:s');
                                            ?>
                                    @if($car_rent->pickup_date == $tdydate)
                                        <p class="text-primary">In Active</p>
                                    @else
                                        <p class="text-danger">Active</p>
                                    @endif
                                    </b>
                                        </td>
                                        <td>{{ $car_rent->pickup_date }}</td>
                                        <td >{{ $car_rent->price }}</td>
                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>
                       
</section>
</div>