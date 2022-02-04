@include('layouts.partial.header')
@extends('layouts.master')
@section('title','Owner Listing')
@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Car Rental Listing</h1>
            <div class="section-header-breadcrumb">
                <ol class="breadcrumb bg-dark text-yellow-all">
                    <li class="breadcrumb-item"><a href="/backend/dashboard"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-car"></i>Customer</li>
                </ol>
            </div>
        </div>
        </section>   

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

<div class="content mt-3">
    <div class="animated fadeIn">

        
            <div class="card"><!-- .card start -->
                <div class="card-header">
                    <div class="col-md-12">
                        <strong class="card-title">Registartion Report</strong>
                    </div>
                </div>

                <div class="card-body">

                    <div class="row"><!-- .row start -->
                        <div class="col-md-3">
                            
                        </div>

                        <div class="col-md-3">
                            <br>
                            <button type="button" class="form-control btn btn-primary" onclick="report_pdf_preview_with_type();">Preview with PDF</button>  

                        </div>
                        <div class="col-md-3">
                            <br>
                            
                            <button type="button" class="form-control btn btn-primary" onclick="report_pdf_export_with_type();">Export Pdf</button>
                        </div>

                        <div class="col-md-3">
                            <br>
                            
                        </div>
                    </div><!-- .row end -->


                </div><!-- .card-body end -->
            </div><!-- .card end -->



            <div class="card"><!-- .card start -->
                <div class="card-header">
                    <div class="col-md-12">
                        <strong class="card-title">Result</strong>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row"><!-- .row start -->

                        <?php
                        $totalAmount = 0;
                        ?>
                        <div class="col-md-12">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Customer Name</th>
                                        <th>Car Name</th>
                                        <th>Pick-Up Date</th>
                                        <th>Cost</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($car_rent as $car_rent)
                                    <tr>
                                        <td>{{ $car_rent->user_name }}</td>
                                        <td>{{ $car_rent->car_name }}</td>
                                        <td>{{ $car_rent->pickup_date }}</td>
                                        <td align="right">{{ $car_rent->price }}</td>
                                    </tr>

                                    <?php $totalAmount += $car_rent->price; ?>
                                    @endforeach

                                    <tr>
                                        <td colspan="3"><b> Total Price</b></td>
                                        <td align="right">{{ $totalAmount }}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div><!-- .row end -->

                </div><!-- .card end -->
            
            
        </div><!-- .animated -->
</div><!-- .content -->

@stop

@section('page_script')
<script src="/js/jquery.js"></script>
<script>
    function report_search_with_type() {
        var type = $("#course_id").val();
        var form_action = "/backend/report/search/" + type;
        window.location = form_action;
    }

    function report_export_with_type() {
        var type = $("#course_id").val();
        var form_action = "/backend/report/exportexcel/" + type;
        window.location = form_action;
    }

    function report_pdf_export_with_type() {
        var type = $("#course_id").val();
        var form_action = "/backend/report/exportpdf/" + type;
        window.location = form_action;
    }

    function report_pdf_preview_with_type() {
        var type = 1; //$("").val();
        var form_action = "/backend/report/previewpdf/" + type;
        window.location = form_action;
    }
</script>



@stop

<!--  -->
</section>
</div>