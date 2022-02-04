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
<div class="main">
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <ol class="breadcrumb bg-dark text-yellow-all">
                    <li class="breadcrumb-item"><a href="/ownerpage/dashboard"><i class="fas fa-tachometer-alt"></i> Home</a></li>
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
                <button class="btn-text" style="margin-left:200px">Save Changes</button>
            </form>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-0">

        </div>
</div>