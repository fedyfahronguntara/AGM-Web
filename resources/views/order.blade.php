@extends('layouts.app')

@section('content')
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
          

          <hr width="40" class="text-center" />
        </div>
      </section>
<section class="container text-center">
        <h2 class="section-title">Daftar Harga Transpot</h2>
       
        <hr width="40" class="text-center"  />
        <div class="row">

        @foreach($cars as $car)

          <div class="col-lg-3 mb-5">
            
            <div class="card p-3 border-0" style="border-radius: 0;text-align:left;">

              <img style="height: 200px;object-fit: contain;" src="{{ Storage::url($car->image1) }}" alt="">
              <!-- <img style="height: 200px;object-fit: contain;" src="{{ asset('frontend/assets/images/logofix__.png') }}" alt=""> -->
              <h4 class="main-color fw-bold mb-4" style="font-size: 1.4rem">{{ $car->name }}</h4>
              <span class="fw-bold mb-4" >Harga : IDR.{{ $car->price }}</span> 
              <span class="d-flex mb-3"><i class='bx bxs-gas-pump main-color fs-4 me-3 '></i> <strong>Driver + BBM</strong> </span> 
              <span class="d-flex"><i class='bx bxs-time-five main-color fs-4 me-3' ></i> <strong>{{ $car->duration }}</strong></span>
                            <form action="{{route('cardetail',$car)}}" method="POST">
    @csrf
              <Input type="hidden" class="form-control" id="pickupdate" name="pickupdate" value="{{ $detailorder['pickupdate']}}"></Input>
              <Input type="hidden" class="form-control" id="servicetype" name="servicetype" value="{{ $detailorder['servicetype']}}"></Input>
              <Input type="hidden" class="form-control" id="goingto" name="goingto" value="{{ $detailorder['goingto']}}"></Input>
            <Input type="hidden" class="form-control" id="pickuptime" name="pickuptime" value="{{ $detailorder['pickuptime']}}"></Input>
            <Input type="hidden" class="form-control" id="location" name="location" value="{{ $detailorder['location']}}"></Input>
            
           
              <button type="submit" class="btn btn-primary btn-block">Detail</button>
            
            </div>
          </div>
          </form>
          @endforeach
          
          

        </div>
      </section>
     
</main>
@endsection