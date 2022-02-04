<div class="container">
    <h1>Car Rental list</h1>
    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Customer Name</th>
                                        <th>Car Name</th>
                                        <th>Pick Up Date</th>
                                        <th>price</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($registrations as $car_rent)
                                    <tr>
                                        <td>{{ $car_rent->user_name }}</td>
                                        <td>{{ $car_rent->car_name }}</td>
                                        <td>{{ $car_rent->pickup_date }}</td>
                                        <td align="right">{{ $car_rent->price }}</td>
                                    </tr>

                                   
                                    @endforeach

                                    
                                </tbody>
                            </table>
</div>