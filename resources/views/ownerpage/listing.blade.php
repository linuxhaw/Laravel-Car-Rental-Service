@include('layouts.partial.ownerheader')
@yield('script')
@yield('page_script')
@section('title','Car Listing')
@section('content')

<style>


    
      .main {
              padding-left: 30px;
              padding-right: 30px;
              padding-top: 80px;
              width: 100%;
              position: relative; 
            }
    


  </style>

         
<div class="main" >
    <section class="section">
        <div class="section-header">
        <a href="/ownerpage/dashboard"><img src="../images/hackney.png" width="120px" height="`120px" alt="Hackney"></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <h1 style="color:rgb(9, 48, 53)">Online Car Rental Service</h1>
            <div class="section-header-breadcrumb">
                <ol class="breadcrumb bg-dark text-yellow-all">
                    <li class="breadcrumb-item"><a href="/ownerpage/create"><i class="fas fa-car"></i> Create New Car</a></li>
                    <li class="breadcrumb-item" ><a href="/ownerpage/listing"><i class="fas fa-car"></i>Your Cars Rental Listing</a></li>
                </ol>
            </div>
        </div>
        </section>   
        <div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row"><!-- div class=row one start -->
            @if (session('success'))
                <div class="flash-message col-md-12">
                <div class="alert alert-success ">
                    {{session('success')}}
                </div>
                </div>
            @endif
        </div>
    </div>
</div>

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

      
            
                    

          @include('layouts.partial.footer')


