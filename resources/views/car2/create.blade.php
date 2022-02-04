@include('layouts.partial.header')
@extends('layouts.master')  
@section('title','Car Listing')
@section('content')

<div class="main-content">
<div class="col-lg-12 col-md-12 col-sm-12">

<div class="content mt-3"><!-- div class=row content start -->
    <div class="animated fadeIn"><!-- div class=FadeIn start -->
        <div class="card"><!-- card start -->
    
            <div class="card-header"><!-- card-header start -->
                <strong class="card-title">Cars Create</strong>
            </div><!-- card-header end -->
    
            <div class="card-body">  <!-- card-body start -->

                <form action="/backend/car/store" enctype="multipart/form-data" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="hidden" name="owner_id" value="{{ Auth::user()->id }}">

                <div class="row"><!-- div class=row One start -->

                    <div class="col-md-4"><!-- div class=col 12 One start -->
                        Brand<br>
                        <input class="form-control" type='text' name='brand' />
                    </div><!-- div class=col 12 One end -->

                    <div class="col-md-4">
                        Name<br>
                        <input class="form-control" type='text' name='name' />
                    </div>

                    <div class="col-md-4">
                        Type<br>
                        <select class="form-control" name="type">
                            <option value="" selected disabled>Select Type</option>        
                            <option value="suv">SUV</option>
                            <option value="saloon">Saloon</option>
                            <option value="sport">Sport</option>
                        </select>
                        <br>
                    </div>
                </div><!-- div class=row One end -->


                <div class="row"><!-- div class=row One start -->

<div class="col-md-4"><!-- div class=col 12 One start -->
    Price<br>
    <input class="form-control" type='number' name='price' />
</div><!-- div class=col 12 One end -->

<div class="col-md-4">
    Car Number<br>
    <input class="form-control" type='text' name='car_no' />
</div>

<div class="col-md-4">
    Status<br>
    <select class="form-control" name="status" id="status">
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
                        <input type="file" name="img1" required>
                    </div><!-- div class=col 12 One end -->

                    <div class="col-md-4">
                    Image2<br>
                        <input type="file" name="img2" required>
                    </div>

                    <div class="col-md-4">
                        Image3<br>
                        <input type="file" name="img3" required>

                        <p><br><br>
                    </div>
                </div><!-- div class=row One end -->
                <div class="row"><!-- div class=row One start -->
                

                    <div class="col-md-4">
                    </div>

                    <div class="col-md-2">
                        <input class="form-control btn btn-primary" type='submit' value="Save" />
                    </div>

                    <div class="col-md-2">
                        <a href="/dashboard" class="form-control btn btn-primary">Cancel</a>
                    </div>

                    <div class="col-md-4">
                    </div>

                </div><!-- div class=row One end -->

                </form>
            </div> <!-- card-body end -->

        </div><!-- card end -->
    </div><!-- div class=FadeIn start -->
</div><!-- div class=row content end -->
<div class="col-lg-12 col-md-12 col-sm-12">
</div></section></div>



