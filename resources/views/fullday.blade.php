@extends('layouts.app')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Google Maps JavaScript library -->
<!-- <script src="https://maps.google.com/maps/api/js?key=AIzaSyBBpb6otWsyji0nfYTlSj3U_1A6mvulSXs&amp;libraries=places&amp;callback=initialize" type="text/javascript"></script> -->
 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyBBpb6otWsyji0nfYTlSj3U_1A6mvulSXs"></script>
<main>
<section
        class="hero"
        id="hero"
        style="
          background-repeat: no-repeat;
          background-size: cover;
          height: 30vh;
          background-image: url('https://media.istockphoto.com/photos/selfie-of-girl-with-turtle-underwater-picture-id950473038?b=1&k=20&m=950473038&s=170667a&w=0&h=o60q1wOQMimHuch1T9KSwGFgehQpwPcxfKtiw0khhZ4=');
        "
      >
        <div
          class="hero-content h-100 d-flex justify-content-center align-items-center flex-column"
        >
          <h1 class="text-center text-white display-4">
           Full Day
          </h1>

          <hr width="40" class="text-center" />
        </div>
      </section>
      <div class="container">
      @if(session('message'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>{{ session('message') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
             </div>
<section class="container why-us text-center">
              
  <form action="{{route('search')}}" method="POST" >
    @csrf
<div class="row mt-5">
<div class="col-lg-6 mb-3" >
            
          </div>
<div class="col-lg-6 mb-3">
            <div class="card pt-4 pb-3 px-2">
              <div class="why-us-content">
              
        <div class="pt-4 mb-3">
          
            <!-- <div class="mb-3" style="width: 250px;">
                <label for="cartype" class="form-label">CAR TYPE</label>
                <select class="form-control" id="cartype" name="cartype" placeholder="select car type" required>
                    <option value="">Car 1</option>
                    <option value="">Car 2</option>
                    <option value="">Car 3</option>
                </select>              
            </div> -->
        </div>
        <div class="mb-3 row">
            <div class="mb-3" style="width: 250px;">
                <label for="" class="form-label">PICK UP DATE</label>
                <Input type="date" class="form-control" id="pickupdate" name="pickupdate" placeholder="type here..." required></Input>
                <Input type="hidden" class="form-control" id="servicetype" name="servicetype" value="0"></Input>
            </div>
            <div class="mb-3" style="width: 250px;">
                <label for="" class="form-label">PICK UP TIME (WITA)</label>
                <Input type="time" class="form-control" id="pickuptime" name="pickuptime" placeholder="" required></Input>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="mb-3" style="width: 500px;">
                <label for="" class="form-label">PICK-UP</label>
                <!-- <Input type="text" class="form-control" id="location" name="location" placeholder="type here..." required></Input> -->
                <Input type="hidden" class="form-control" id="goingto" name="goingto" placeholder="type here..." required></Input>
                <input type="text" class="form-control" id="location" name="location" placeholder="Type address..." />
            </div>
        </div>
        <div>
            <div class="d-grid gap-5 d-md-flex">
                <!-- <a type="button" class="btn rounded-pill" style="width:100px; height: 40px; color:#fff; background-color:#E8C667;" href="/"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/></svg> Back</a> -->
                <!-- <button type="button" class="btn rounded-pill" style="width:150px; height: 40px; color:#fff;background-color:#E8C667;">Search</button> -->
                <!-- <a href="" class="btn mt-4 btn-book">Search</a>  -->
                <button type="submit" class="btn btn-primary btn-block" style="background-color:#E8C667;">Search</button>
            </div>
        </div>
    </div>
              </div>
            </div>
          </div>
</form>
</section>
<script>
var searchInput = 'location';
 
$(document).ready(function () {
 var autocomplete;
 autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
  types: ['geocode'],
  /*componentRestrictions: {
   country: "USA"
  }*/
 });
  
 google.maps.event.addListener(autocomplete, 'place_changed', function () {
  var near_place = autocomplete.getPlace();
 });
});
</script>


</main>
@endsection