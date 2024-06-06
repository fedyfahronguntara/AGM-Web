<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/libraries/bootstrap/css/bootstrap.min.css') }}">
    @stack('style-alt')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
    <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{ asset('backend/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Hallo {{ $detail['customer'] }}</h1>
    <h2>Your Booking ID {{ $detail['order_id'] }}</h2>


    @if($detail['servicetype']=='0')
    <section class="container text-center">
            <div class="row"  >
              <div class="col-lg-4"></div>
                <div class="col-lg-5" style="background-color: #517980; color:#ffffff; width:400px">
                    <div class="col-lg-12 mb-4"></div>
                    <div class="col-lg-12 mb-2">Nama : <b style="background-color: #517980; color:#ffffff">{{ $detail['customer'] }}</b></div>
             
                  
                    <div class="col-lg-12 mb-2">Contact : <b style="background-color: #517980; color:#ffffff">{{ $detail['no_wa'] }}</b></div>
              
                  
                    <div class="col-lg-12 mb-2">Price : <b style="background-color: #517980; color:#ffffff">{{ $detail['price'] }}</b></div>
              
                  
                    <div class="col-lg-12 mb-2">Pick Up Time : <b style="background-color: #517980; color:#ffffff">{{ $detail['pickupdate'] }} - {{ $detail['pickuptime'] }}</b></div>
              
                    
                    <div class="col-lg-12 mb-2">Pick Up : <b style="background-color: #517980; color:#ffffff">{{ $detail['location'] }}</b></div>
                   
                    
                    <div class="col-lg-12 mb-2">Car Type : <b style="background-color: #517980; color:#ffffff">{{ $detail['cartype'] }}</b></div>
                   @if($detail['servicetype']=='0')
                                <div class="col-lg-12 mb-5"> Service Type: <b style="background-color: #517980; color:#ffffff">Full Day</b></div>
                                
                            @elseif($detail['servicetype']=='1')
                                <div class="col-lg-12 mb-5"> Service Type: <b style="background-color: #517980; color:#ffffff">Transfer</b></div>
                            @endif   
                    
                
                    
                    
              @if($detail['Status']=='1')
                                <div class="col-lg-12 mb-5"> Status: <b style="background-color: #517980; color:#ffffff">Rejected</b></div>
                                
                            @elseif($detail['Status']=='2')
                                <div class="col-lg-12 mb-5"> Status: <b style="background-color: #517980; color:#ffffff">Approve</b></div>
                            @else
                                <div class="col-lg-12 mb-5">Status: <b style="background-color: #517980; color:#ffffff">In Progress</b></div>
                            @endif
            </div>
            <div class="col-lg-1"></div>
                        </div>
</section>
        @elseif($detail['servicetype']=='1')
            <section class="container text-center">
            <div class="row"  >
              <div class="col-lg-4"></div>
                <div class="col-lg-5" style="background-color: #517980; color:#ffffff; width:400px">
                    <div class="col-lg-12 mb-4"></div>
                    <div class="col-lg-12 mb-2">Nama : <b style="background-color: #517980; color:#ffffff">{{ $detail['customer'] }}</b></div>
             
                  
                    <div class="col-lg-12 mb-2">Contact : <b style="background-color: #517980; color:#ffffff">{{ $detail['no_wa'] }}</b></div>
              
                  
                    <div class="col-lg-12 mb-2">Price : <b style="background-color: #517980; color:#ffffff">{{ $detail['price'] }}</b></div>
              
                  
                    <div class="col-lg-12 mb-2">Pick Up Time : <b style="background-color: #517980; color:#ffffff">{{ $detail['pickupdate'] }} - {{ $detail['pickuptime'] }}</b></div>
              
                    
                    <div class="col-lg-12 mb-2">From To : <b style="background-color: #517980; color:#ffffff">{{ $detail['location'] }}</b></div>
                    <div class="col-lg-12 mb-2">Going To : <b style="background-color: #517980; color:#ffffff">{{ $detail['goingto'] }}</b></div>
                   
                    
                    <div class="col-lg-12 mb-2">Car Type : <b style="background-color: #517980; color:#ffffff">{{ $detail['cartype'] }}</b></div>
                   
                    
                @if($detail['servicetype']=='0')
                                <div class="col-lg-12 mb-5"> Service Type: <b style="background-color: #517980; color:#ffffff">Full Day</b></div>
                                
                            @elseif($detail['servicetype']=='1')
                                <div class="col-lg-12 mb-5"> Service Type: <b style="background-color: #517980; color:#ffffff">Transfer</b></div>
                            @endif   
                    
                    
              @if($detail['Status']=='1')
                                <div class="col-lg-12 mb-5"> Status: <b style="background-color: #517980; color:#ffffff">Rejected</b></div>
                                
                            @elseif($detail['Status']=='2')
                                <div class="col-lg-12 mb-5"> Status: <b style="background-color: #517980; color:#ffffff">Approve</b></div>
                            @else
                                <div class="col-lg-12 mb-5">Status: <b style="background-color: #517980; color:#ffffff">In Progress</b></div>
                            @endif
            </div>
            <div class="col-lg-1"></div>
                        </div>
</section>
                            
              
@endif
    
</body>
</html>