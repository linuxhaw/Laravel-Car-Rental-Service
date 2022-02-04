@include('layouts.partial.header')
@extends('layouts.master')  
@section('title','Car Listing')
@section('content')


        
            
                    <div class="card-header"><!-- card-header start -->
                        <strong class="card-title">Cars Create</strong>
                    </div>          

<div class="main-content">
<div class="col-lg-12 col-md-12 col-sm-12">

        <div class="card-body">
            <form action="register/store" method="POST">
            @if(session('success'))
    <h4 class="text-primary">{{session('success')}}</h4>
@endif
            @foreach ($errors->all() as $error)
                            <div class="col-md-12"><!-- div class=col 12 One start -->
                                <p class="text-danger">* {{ $error }}</p> 
                            </div><!-- div class=col 12 One end -->
                        @endforeach
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            <div class="row"><!-- div class=row One start -->

<div class="col-md-4"><!-- div class=col 12 One start -->
    Username<br>
    <input class="form-control" type='text' name='name' placeholder="Enter username" required />
</div><!-- div class=col 12 One end -->

<div class="col-md-4">
    Email<br>
    <input class="form-control" type='email' name='email' placeholder="Enter Your email" required />
</div>

<div class="col-md-4">
    Role<br>
    <select class="custom-select" class="form-control" name="role" required>
        <option selected >Select Register</option>        
        <option value="1">Administrator</option>
        <option value="2">Car Owner</option>
    </select>
    <br>
</div>
</div><br><p><p><br><!-- div class=row One end -->

<div class="row"><!-- div class=row One start -->

<div class="col-md-4"><!-- div class=col 12 One start -->
    Phone No<br>
    <input class="form-control" type='integer' name='phone_no' value="95" required />
</div><!-- div class=col 12 One end -->

<div class="col-md-4">
    Password<br>
    <input class="form-control" type='password' name='password' required/>
</div>

<div class="col-md-4">
    Confirm Password<br>
    <input class="form-control" type='password' name='confirmpassword' required/>
</div>

</div>
     <br><p>

     <div class="row"><!-- div class=row One start -->
                

                <div class="col-md-4">
                </div>

                <div class="col-md-2">
                    <input class="form-control btn btn-primary" type='submit' value="Register" />
                </div>

                <div class="col-md-2">
                    <a href="/dashboard" class="form-control btn btn-primary">Cancel</a>
                </div>

                <div class="col-md-4">
                </div>

            </div><!-- div class=row One end -->


            </table>
        </form>
    </div>
    
<!-- 
                <table>
                    <tr>
                        <td>User Name</td>
                        <td>Email</td>
                    </tr>
                    <tr>
                        <td><input type="text" placeholder="Enter User Name" name="name"></td>
                        <td><input type="email" placeholder="Enter User Email" name="email"></td>
                    </tr>
                    <tr>
                        <td>Register Role</td>
                        <td>Phone Number</td>
                    </tr>
                    <tr>
                        <td>
                        <select class="custom-select" name="role">
                                <option selected>Select...</option>
                                <option value="1">Administrator</option>
                                <option value="2">Car Owner</option>
                            </select>
                        </td>
                        <td><input type="integer" name="ph" value="95"</td>
                    </tr>

                    <tr>
                        <td>Password</td>
                        <td>Confirm Password</td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password"></td>
                        <td><input type="password" name="confirmpassword"></td>
                    </tr> -->

              
        
    
