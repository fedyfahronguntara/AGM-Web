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
          height: 50vh;
          background-image: url('https://media.istockphoto.com/photos/selfie-of-girl-with-turtle-underwater-picture-id950473038?b=1&k=20&m=950473038&s=170667a&w=0&h=o60q1wOQMimHuch1T9KSwGFgehQpwPcxfKtiw0khhZ4=');
        "
      >
        <div
          class="hero-content h-100 d-flex justify-content-center align-items-center flex-column"
        >
          <h1 class="text-center text-white display-4">
           Transfer
          </h1>

          <hr width="40" class="text-center" />
        </div>
      </section>

<section class="container why-us text-center">
              
  <form action="{{route('search')}}" method="POST" >
    @csrf
<div class="row mt-5">
<div class="col-lg-4 mb-3" style="
          background-repeat: no-repeat;
          background-size: cover;
          height: 50vh;
          background-image: url('https://media.istockphoto.com/photos/selfie-of-girl-with-turtle-underwater-picture-id950473038?b=1&k=20&m=950473038&s=170667a&w=0&h=o60q1wOQMimHuch1T9KSwGFgehQpwPcxfKtiw0khhZ4=');
        ">
            
</div>
    <div class="col-lg-8 mb-3">
        <div class="card pt-4 pb-3 px-2">
            <div class="why-us-content">
                
                    <div class="pt-4 mb-3 row">
                        <div class="mb-3" style="width: 250px;">
                            <label for="" class="form-label">FROM</label>
                            <Input type="text" class="form-control" id="location" name="location" placeholder="type here..."></Input>
                            <Input type="hidden" class="form-control" id="servicetype" name="servicetype" value="1"></Input>
                        </div>
                        <div class="mb-3" style="width: 250px;">
                            <label for="" class="form-label">GOING TO</label>
                            <Input type="text" class="form-control" id="goingto" name="goingto" placeholder="type here..."></Input>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="mb-3" style="width: 250px;">
                            <label for="" class="form-label">PICK UP DATE</label>
                            <Input type="date" class="form-control" id="pickupdate" name="pickupdate"placeholder="type here..."></Input>
                        </div>
                            <div class="mb-3" style="width: 250px;">
                                <label for="" class="form-label">PICK UP TIME</label>
                                <Input type="time" class="form-control" id="pickuptime" name="pickuptime" placeholder="type here..."></Input>
                            </div>
                        </div>
                        <div>
                            <div class="d-grid gap-5 d-md-flex">
                                <button type="submit" class="btn rounded-pill" style="width:150px; height: 40px; color:#fff;background-color:#E8C667;">Search</button>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
</div>
</form>
</section>
<section class="container why-us text-center">


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
<script>
var searchInput2 = 'goingto';
 
$(document).ready(function () {
 var autocomplete;
 autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput2)), {
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