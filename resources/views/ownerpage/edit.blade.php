@include('layouts.partial.ownerheader')
@yield('script')
@yield('page_script')
@section('title','Car Listing')
@section('content')


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

@if (count($errors) > 0)
<div class="content mt-3"><!-- div class=row content start -->
    <div class="animated fadeIn"><!-- div class=FadeIn start -->
        <div class="card"><!-- card start -->
    
            <div class="card-body">  <!-- card-body start -->

                
                    <div class="row"><!-- div class=row One start -->
                        @foreach ($errors->all() as $error)
                            <div class="col-md-12"><!-- div class=col 12 One start -->
                                <p class="text-danger">* {{ $error }}</p> 
                            </div><!-- div class=col 12 One end -->
                        @endforeach
                    </div><!-- div class=row One end -->
                

            </div> <!-- card-body end -->

        </div><!-- card end -->
    </div><!-- div class=FadeIn start -->
</div><!-- div class=row content end -->
@endif

<div class="col-lg-12 col-md-12 col-sm-12">

<div class="content mt-3"><!-- div class=row content start -->
    <div class="animated fadeIn"><!-- div class=FadeIn start -->
        <div class="card"><!-- card start -->
    
            <div class="card-header"><!-- card-header start -->
                <strong class="card-title">Manage Cars</strong>
            </div><!-- card-header end -->
    
            @foreach($cars as $car)

            <div class="card-body">  <!-- card-body start -->

                <form action="/ownerpage/car/update/{{ $car-> car_id}}" enctype="multipart/form-data" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="hidden" name="owner_id" value="{{ Auth::user()->id }}">

                
                    <div class="row"><!-- div class=row One start -->

                     <div class="col-md-4"><!-- div class=col 12 One start -->
                        Brand<br>
                        <input class="form-control" type='text' name='brand' value="{{ $car->brand }}"/>
                    </div><!-- div class=col 12 One end -->

                    <div class="col-md-4">
                        Name<br>
                        <input class="form-control" type='text' name='name'  value="{{ $car->name }}"/>
                    </div>

                    <div class="col-md-4">
                        Type<br>
                        <select class="form-control" name="type"  value="{{ $car->type }}">
                            <option value="" selected disabled>Select Type</option>        
                            <option value="suv">SUV</option>
                            <option value="saloon">Saloon</option>
                            <option value="sport">Sport</option>
                        </select>
                        <br>
                    </div>
                </div>
                <!-- div class=row One end -->


                <div class="row"><!-- div class=row One start -->

<div class="col-md-4"><!-- div class=col 12 One start -->
    Price<br>
    <input class="form-control" type='number' name='price'  value="{{ $car->price }}"/>
</div><!-- div class=col 12 One end -->

<div class="col-md-4">
    Car Number<br>
    <input class="form-control" type='text' name='car_no'  value="{{ $car->car_no }}"/>
</div>

<div class="col-md-4">
    Status<br>
    <select class="form-control" name="status" id="status"  value="{{ $car->status }}">
        <option value="" selected disabled>Select Status</option>        
        <option value="1">Active</option>
        <option value="0">Inactive</option>
    </select>
    <br>
</div>
</div><!-- div class=row One end -->


                <div class="row"><!-- div class=row One start -->

                    <div class="col-md-4"><!-- div class=col 12 One start -->
                    Image1<br>
                    <img src="../../images/{{ $car->image1 }}" alt="img" width="200" height="100"><br>
                        <input type="file" name="img1" >
                    </div><!-- div class=col 12 One end -->

                    <div class="col-md-4">
                    Image2<br>
                    <img src="../../images/{{ $car->image2 }}" alt="img" width="200" height="100"><br>
                        <input type="file" name="img2" >
                    </div>

                    <div class="col-md-4">
                        Image3<br>
                        <img src="../../images/{{ $car->image3 }}" alt="img" width="200" height="100"><br>
                        <input type="file" name="img3" >

                        <p><br><br>
                    </div>
                </div><!-- div class=row One end -->
                <div class="row"><!-- div class=row One start -->
                

                    <div class="col-md-4">
                    </div>

                    <div class="col-md-2">
                        <input class="form-control btn btn-primary" type='submit' value="Update" />
                    </div>

                    <div class="col-md-2">
                        <a href="/ownerpage/dashboard" class="form-control btn btn-primary">Cancel</a>
                    </div>

                    <div class="col-md-4">
                    </div>

                </div><!-- div class=row One end -->

                </form>
            </div> <!-- card-body end -->
            @endforeach
        </div><!-- card end -->
    </div><!-- div class=FadeIn start -->
</div><!-- div class=row content end -->
<div class="col-lg-12 col-md-12 col-sm-12">
</div></section></div>




