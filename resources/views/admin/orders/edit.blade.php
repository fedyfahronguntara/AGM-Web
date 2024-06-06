@extends('admin.layout')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit {{ $order->title }}</h1>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('admin.orders.update', $order) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="order_id">Order ID</label>
                        <input type="text" class="form-control" id="order_id" name="order_id" value="{{ $order->order_id }}" disable/>
                        <input type="hidden" class="form-control" id="car_id" name="car_id" value="{{ $order->car_id }}"/>
                    </div>
                    <div class="form-group">
                        <!-- <label for="id">Order ID</label> -->
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $order->id }}" disable/>
                    </div>
                    <div class="form-group">
                        <label for="customer">Customer</label>
                        <input type="text" class="form-control" id="ncustomerame" name="customer" value="{{ $order->customer}}" />
                        
                    </div>
                    <div class="form-group">
                        <label for="no_wa">Contact</label>
                        <input type="text" class="form-control" id="no_wa" name="no_wa" value="{{ $order->no_wa }}" />
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $order->price }}" />
                    </div>
                    <div class="form-group">
                        <label for="pickupdate">Pick Up Date</label>
                        <input type="date" class="form-control" id="pickupdate" name="pickupdate" value="{{ $order->pickupdate }}" />
                    </div>
                    <div class="form-group">
                        <div class="row">
                        
                        <div class="col-12">
                            <label for="pickuptime">Pick Up Time (WITA)</label>
                        <input type="time" class="form-control" id="pickuptime" name="pickuptime" value="{{ $order->pickuptime }}" />
                        
                        </div>
                        </div>
                        
                        <!-- <Input type="date" class="form-control" id="pickupdate" name="pickupdate" placeholder="type here..." required></Input> -->
                    </div>
                @if($order->servicetype=='0')
                    <div class="form-group">
                        <label for="location">location</label>
                        <input type="text" class="form-control" id="location" name="location" value="{{ $order->location }}" />
                    </div>
                @elseif($order->servicetype=='1')
                <div class="form-group">
                        <label for="location">From To</label>
                        <input type="text" class="form-control" id="location" name="location" value="{{ $order->location }}" />
                    </div>
                    <div class="form-group">
                        <label for="location">Going To</label>
                        <input type="text" class="form-control" id="goingto" name="goingto" value="{{ $order->goingto }}" />
                    </div>
                @endif
                    <div class="form-group">
                        <label for="cartype">Car Type</label>
                        <input type="text" class="form-control" id="cartype" name="cartype" value="{{ $order->cartype }}" />
                    </div>
                    <div class="form-group">
                        
                        <input type="hidden" class="form-control" id="tnc" name="tnc" value="{{ $order->tnc }}" />
                        <input type="hidden" class="form-control" id="servicetype" name="servicetype" value="{{ $order->servicetype }}" />
                    </div>
                    <div class="form-group">
                        
                        <input type="hidden" class="form-control" id="buktitf" name="buktitf" value="{{ $order->buktitf }}" />
                    </div>
                    
                    <div class="form-group">
                        <label for="Status">Status</label>
                        
                <select type="text" class="form-control" id="Status" name="Status" >
                    <option value="">Select Status</option>
                    <option value="1">Reject</option>
                    <option value="2">Approve</option>
                </select>   
                    </div>
<!-- <div class="mb-3" style="width: 250px;">
                           
            </div> -->
                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection