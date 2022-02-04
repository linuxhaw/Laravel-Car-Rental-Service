@include('layouts.partial.header')
@extends('layouts.master')
@section('title','Change Password')
@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <ol class="breadcrumb bg-dark text-yellow-all">
                    <li class="breadcrumb-item"><a href="/backend/dashboard"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-car"></i> Profile</li>
                </ol>
            </div>
        </div>
    </section>

    <div class="row profile">
        <div class="col-md-3 col-lg-3 col-sm-0">

        </div>
        <div class="col-md-6 col-lg-6 col-sm-12" >
            <form action="{{ route('change.password') }}" method="post">@csrf
            @foreach ($errors->all() as $error)

<p class="text-danger">{{ $error }}</p>

@endforeach 
                    <h3 style="text-align:center;margin-top:50px">Change Password</h3>
                <div class="row" style="margin-top:80px">
                    <div class="col-md-5 col-lg-5 col-sm-5">
                        Current Password
                    </div>
                    <div class="col-7">
                        <input type="password" name="current-password">
                    </div>
                </div><p>
                <div class="row">
                    <div class="col-md-5 col-lg-5 col-sm-5">
                        New Password
                    </div>
                    <div class="col-7">
                        <input type="password" name="new-password">
                    </div>
                </div><p>
                <div class="row">
                    <div class="col-md-5 col-lg-5 col-sm-5">
                        Confirm Password
                    </div>
                    <div class="col-7">
                        <input type="password" name="confirm-password">
                    </div>
                </div><p><br><br>
                <button class="btn-text">Save Changes</button>
            </form>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-0">

        </div>
</div>