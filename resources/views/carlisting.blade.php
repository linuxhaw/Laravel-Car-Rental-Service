@include('layouts.frontend.header')
<div id="ib">
  <div id="fc">


    <form style="padding-top:100px;">

	<div class="form-group col-md-10 col-lg-8" style="margin-top:50px;">
        <label >Select Brand</label>
        <select class="form-control" name="brand">
                            <option value="" selected disabled>Select Brand</option>        
                            <option value="suv">Nissan</option>
                            <option value="saloon">Toyota</option>
							<option value="sport">Honda</option>
							<option value="sport">Mazada</option>
							<option value="sport">Suzuki</option>
                        </select>
      </div>
      <div class="form-group col-md-10 col-lg-8" style="margin-top:50px;">
        <label for="inputPassword4">Choose Amount You Can Afford</label>
        <select class="form-control" name="amount">
                            <option value="" selected disabled>Choose Amount</option>        
                            <option value="suv">$40-$60</option>
                            <option value="saloon">$60-$80</option>
                            <option value="sport">$80-$100</option>
                        </select>
      </div>
      <div class="form-group col-md-10 col-lg-8" style="margin-top:50px;">
        <label for="inputPassword4">Choose your type:</label>
        <select class="form-control" name="type">
                            <option value="" selected disabled>Select Type</option>        
                            <option value="suv">SUV</option>
                            <option value="saloon">Saloon</option>
                            <option value="sport">Sport</option>
                        </select>
      </div>

      <div class="form-group col-md-10" style="margin-top:50px;">
        <button type="submit" class="btn btn-primary" style="width:100px;margin-left:250px;height:50px;" id="buttonpsa">Search</button>
      </div>
    </form>
  </div>
  <div id="fc1">
    <h1>BOOK A CAR TODAY!</h1>
    <p>FOR AS LOW AS $10 A DAY PLUS 15% DISCOUNT
      FOR OUR RETURNING CUSTOMERS</p>
  </div>
</div>

<div class="row" id="amal">



@foreach($cars as $car)
<div class="col-md-4">
  <div class="card">
    <img src="../../images/{{ $car->image1 }}" alt="img" width="200" height="250" class="card-img-top" >
    <div class="card-body">
	  <td class="card-title">{{ $car->brand }}</td>
	  <td class="card-title">{{ $car->name }}</td><br>
	  Type  :
	  <td class="card-title">{{ $car->type }}</td><br>
	  Price per day  :
	  <td class="card-title">{{ $car->price }}</td><br>
	  Car Number  :
	  <td class="card-title">{{ $car->car_no }}</td>
      <hr style="padding-right:15px;padding-left:15px;">
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <a  href='booking/{{ $car->car_id}}'><button type="button" class="btn btn-primary" id="book-it"data-target="#exampleModalCenter" >
		  
		Book It
		
      </button></a>

      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Confirm Order</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endforeach
</div>

@include('layouts.frontend.footer')