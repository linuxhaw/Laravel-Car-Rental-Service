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
                    <li class="breadcrumb-item"><a href="/ownerpage/create"><i class="fas fa-car"></i><h6> Create New Car</h6></a></li>
                    
                </ol> 

                <p>&nbsp</p><p>&nbsp</p><p>&nbsp</p>

                <ol class="breadcrumb bg-dark text-yellow-all">
                    
                    <li class="breadcrumb-item" ><a href="/ownerpage/rental_list"><i class="fas fa-car"></i><h6>Your Cars Rental Listing</h6></a></li>
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
       
        <?php 
        $loginUser = Auth::user();
        if ($loginUser->role_id == 2) {
            ?>
      
        <?php
        }
        ?>

      
            
                    <div class="card-body">  <!-- card-body start -->
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">

                            
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
                                    <td><img src="../../images/{{ $cars->image1 }}" alt="img" width="70" height="50"></td>
                                    <td><img src="../../images/{{ $cars->image2 }}" alt="img" width="70" height="50"></td>
                                    <td><img src="../../images/{{ $cars->image3 }}" alt="img" width="70" height="50"></td>
                                

                                <td>
                                    <b>
                                    @if($cars->status == 1)
                                        <p class="text-primary">Active</p>
                                    @else
                                        <p class="text-danger">In-Active</p>
                                    @endif
                                    </b>
                                </td>

                                
                                

                                <td><a class="btn btn-primary"  href='/ownerpage/car_edit/{{$cars->car_id}}'>Edit</a></td>
                                <td><a class="btn btn-danger" onclick="return myFunction1();" href='/ownerpage/car_delete/{{$cars->car_id}}'>Delete</i></a>
                                </td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        

                            


<script>

}
function myFunction1() {
    if(!confirm("Are You Sure to delete this ?"))
    event.preventDefault();
}
</script>

@section('page_script')

@stop


          @include('layouts.partial.footer')


