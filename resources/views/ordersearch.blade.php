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
          <h1 class="text-center text-white display-4">
           Check Your Booking Status
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
       <h1>Search Booking</h1>

    <form action="{{ route('ordersearch') }}" method="POST">
        @csrf
        <label for="id">Search:</label>
        <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-2"><input type="text" class="input-group-text" id="id" name="id" required></div>
        <div class="col-md-1"><button type="submit" class="btn btn-primary" style="background-color:#E8C667">Search</button></div>
        </div>
        
        
    </form>

    @if(isset($results))
        
    
            <h2>Search Results for Booking ID "{{ $query }}"</h2>

                @forelse($results as $result)
                @if($result->servicetype=='0')
                    <ul>
                    <section class="container text-center">
                        <div class="row"  >
                            <div class="col-lg-4"></div>
                            <div class="col-lg-5" style="background-color: #517980; color:#ffffff; border-radius:10px 50px;">
                            <div class="col-lg-12 mb-4"></div>
                            <div class="col-lg-12 mb-2">Nama : <b style="background-color: #517980; color:#ffffff">{{ $result->customer }}</b></div>
                            <li></li>
                            <div class="col-lg-12 mb-2">Contact : <b style="background-color: #517980; color:#ffffff">{{ $result->no_wa }}</b></div>
                                <!-- <div class="col-lg-3 mb-5"></div> -->
                            <li></li>
                            <div class="col-lg-12 mb-2">Price : <b style="background-color: #517980; color:#ffffff">{{ $result->price }}</b></div>
                                <!-- <div class="col-lg-3 mb-5">{{ $result->customer }}</div> -->
                            <li></li>
                            <div class="col-lg-12 mb-2">Pick Up Time : <b style="background-color: #517980; color:#ffffff">{{ $result->pickupdate }} - {{ $result->pickuptime }}</b></div>
                                <!-- <div class="col-lg-3 mb-5">{{ $result->customer }}</div> -->
                            <li></li>
                            <div class="col-lg-12 mb-2">Pick-Up : <b style="background-color: #517980; color:#ffffff">{{ $result->location }}</b></div>
                                        <!-- <div class="col-lg-3 mb-5">{{ $result->customer }}</div> -->
                            <li></li>
                            <div class="col-lg-12 mb-2">Car Type : <b style="background-color: #517980; color:#ffffff">{{ $result->cartype }}</b></div>
                                        <!-- <div class="col-lg-3 mb-5">{{ $result->customer }}</div> -->
                            <li></li>
                            <div class="col-lg-12 mb-2">Booking at : <b style="background-color: #517980; color:#ffffff">{{ $result->created_at->format('d, M Y') }}</b></div>
                                        <!-- <div class="col-lg-3 mb-5">{{ $result->customer }}</div> -->
                            <li></li>
                            @if($result->servicetype=='0')
                                <div class="col-lg-12 mb-5"> Service Type: <b style="background-color: #517980; color:#ffffff">Full Day</b></div>
                                
                            @elseif($result->servicetype=='1')
                                <div class="col-lg-12 mb-5"> Service Type: <b style="background-color: #517980; color:#ffffff">Transfer</b></div>
                            @endif            
                                        
                            @if($result->Status=='1')
                                <div class="col-lg-12 mb-5"> Status: <b style="background-color: #517980; color:#ffffff">Rejected</b></div>
                                                    
                            @elseif($result->Status=='2')
                                <div class="col-lg-12 mb-5"> Status: <b style="background-color: #517980; color:#ffffff">Approve</b></div>
                            @else
                                <div class="col-lg-12 mb-5">Status: <b style="background-color: #517980; color:#ffffff">In Progress</b></div>
                            @endif
                        
                            <div class="col-lg-1"></div>
                                
                                                
                                
                                
                        </div>
                    </section>
                @elseif($result->servicetype=='1')
                <ul>
                <section class="container text-center">
                    <div class="row"  >
                        <div class="col-lg-4"></div>
                            <div class="col-lg-5" style="background-color: #517980; color:#ffffff; border-radius:10px 50px;">
                            <div class="col-lg-12 mb-4"></div>
                            <div class="col-lg-12 mb-2">Nama : <b style="background-color: #517980; color:#ffffff">{{ $result->customer }}</b></div>
                            <!-- <div class="col-lg-3 mb-2"></div> -->
                            <li></li>
                            <div class="col-lg-12 mb-2">Contact : <b style="background-color: #517980; color:#ffffff">{{ $result->no_wa }}</b></div>
                            <!-- <div class="col-lg-3 mb-5"></div> -->
                            <li></li>
                            <div class="col-lg-12 mb-2">Price : <b style="background-color: #517980; color:#ffffff">{{ $result->price }}</b></div>
                            <!-- <div class="col-lg-3 mb-5">{{ $result->customer }}</div> -->
                            <li></li>
                            <div class="col-lg-12 mb-2">Pick Up Time : <b style="background-color: #517980; color:#ffffff">{{ $result->pickupdate }} - {{ $result->pickuptime }}</b></div>
                            <!-- <div class="col-lg-3 mb-5">{{ $result->customer }}</div> -->
                            <li></li>
                            <div class="col-lg-12 mb-2">From To : <b style="background-color: #517980; color:#ffffff">{{ $result->location }}</b></div>
                                    <!-- <div class="col-lg-3 mb-5">{{ $result->customer }}</div> -->
                            <li></li>
                            <div class="col-lg-12 mb-2">Going To : <b style="background-color: #517980; color:#ffffff">{{ $result->goingto }}</b></div>
                                    <!-- <div class="col-lg-3 mb-5">{{ $result->customer }}</div> -->
                            <li></li>
                            <div class="col-lg-12 mb-2">Car Type : <b style="background-color: #517980; color:#ffffff">{{ $result->cartype }}</b></div>
                                    <!-- <div class="col-lg-3 mb-5">{{ $result->customer }}</div> -->
                            <li></li>
                            <div class="col-lg-12 mb-2">Booking at : <b style="background-color: #517980; color:#ffffff">{{ $result->created_at->format('d, M Y') }}</b></div>
                                    <!-- <div class="col-lg-3 mb-5">{{ $result->customer }}</div> -->
                            <li></li>
                            @if($result->servicetype=='0')
                                <div class="col-lg-12 mb-5"> Service Type: <b style="background-color: #517980; color:#ffffff">Full Day</b></div>
                                
                            @elseif($result->servicetype=='1')
                                <div class="col-lg-12 mb-5"> Service Type: <b style="background-color: #517980; color:#ffffff">Transfer</b></div>
                            @endif          
                                    
                            @if($result->Status=='1')
                                <div class="col-lg-12 mb-5"> Status: <b style="background-color: #517980; color:#ffffff">Rejected</b></div>
                                                
                            @elseif($result->Status=='2')
                                <div class="col-lg-12 mb-5"> Status: <b style="background-color: #517980; color:#ffffff">Approve</b></div>
                            @else
                                <div class="col-lg-12 mb-5">Status: <b style="background-color: #517980; color:#ffffff">In Progress</b></div>
                            @endif
                            
                        <div class="col-lg-1"></div>
                            
                                            
                            
                            
                    </div>
                </section>
            @endif
                <!-- <li>Order ID: AGM-{{ $result->id }}</li> -->
            @empty
                <li>No results found</li>
            @endforelse
        </ul>
    @endif      
  
</section>
</main>
@endsection