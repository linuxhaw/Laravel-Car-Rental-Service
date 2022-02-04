@include('layouts.frontend.header')

<div class="card-body">  <!-- card-body start -->

                
                    <div class="row"><!-- div class=row One start -->
                        @foreach ($errors->all() as $error)
                            <div class="col-md-12"><!-- div class=col 12 One start -->
                                <p class="text-danger">* {{ $error }}</p> 
                            </div><!-- div class=col 12 One end -->
                        @endforeach
                    </div><!-- div class=row One end -->
                

            </div> 
<br><br>
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

<div id="ib">
  <div id="fc">
    
    <form style="padding-top:100px;" action="/booking"  method="post" >
    
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

      <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
      <input type="hidden" name="car_id" value="{{ $car->car_id }}">
      <input type="hidden" name="owner_id" value="{{ $car->owner_id }}">

      <div class="form-group col-md-10">
        <label for="inputEmail4">Pick Up Date</label>
        <input type="date" class="form-control" id="inputEmail4" placeh older="Pick Up Date" name='pickup_date' required>
      </div>
      
      <div class="form-group col-md-10" style="margin-top:50px;">
        <label for="inputPassword4">Cost</label>
        <input type="integer" class="form-control" id="inputPassword4" placeholder="Cost" value="{{ $car->price }}" name="cost" readonly>
      </div>
      
      <div class="form-group col-md-10" style="margin-top:50px;">
        <input type="submit" class="btn btn-primary"   value="Book Now">
        
        <button class="btn btn-danger"><a href="/carlisting">Cancel</a></button>
      </div>
    
    </form>
  </div>
  
  

