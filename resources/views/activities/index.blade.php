@include('layouts.frontend.header')

<div class="main">
    <section class="section">
        <div class="section-header">
            <h1>Your Rental History</h1>
            <div class="section-header-breadcrumb">
                <ol class="breadcrumb bg-dark text-yellow-all">
                    <li class="breadcrumb-item"><a href="/"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-car"></i> History</li>
                </ol>
            </div>
        </div>
    </section>



<div class="content mt-3">
    <div class="animated fadeIn">
       
    <table class="table">
    <table class="table">
                                <thead>
                                    <tr>
                                        <th>Customer Name</th>
                                        <th>Your Car</th>
                                        <th>Rental Status</th>
                                        <th>Pick Up Date</th>
                                        <th>Cost</th>
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
                                        <td>{{ $car_rent->price }}</td>
                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>

                            



@include('layouts.frontend.footer')