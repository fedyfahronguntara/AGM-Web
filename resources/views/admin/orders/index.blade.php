@extends('admin.layout')

@section('content')

<div class="container">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Order List</h1>
            <!-- <a href="{{ route('admin.orders.create') }}" class="btn btn-primary btn-sm shadow-sm">Tambah Mobil <i class="fa fa-plus"> </i></a> -->
    </div>

     

            @if(session('message'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>{{ session('message') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer</th>
                            <th>Contact</th>
                            <th>Price</th>
                            <th>Pick Up Date</th>
                            <th>location</th>
                            <th>From To</th>
                            <th>Going To</th>
                            <th>Car Type</th>
                            <th>Service Type</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                            <th>Bukti Bayar</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($orders as $order)
                        <tr>
                            <td>{{ $order->order_id}}</td>
                            <td>{{ $order->customer }}</td>
                            <td>{{ $order->no_wa }}</td>
                            <td>{{ $order->price }}</td>
                            <td>{{ $order->pickupdate }} <br>{{ $order->pickuptime }}</td>
                            <td>{{ $order->location }}</td>
                            <td>{{ $order->location }}</td>
                            <td>{{ $order->goingto }}</td>
                            <td>{{ $order->cartype }}</td>
                            
                            @if($order->servicetype=='0')
                                <td>Full Day</td>
                                
                            @elseif($order->servicetype=='1')
                                <td>Transfer</td>
                            @endif
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->updated_at }}</td>
                            <td>
                                <a href="{{ Storage::url($order->buktitf) }}" class="popup-link">
                                    <img src="{{ Storage::url($order->buktitf) }}" alt="" class="detail-img" style="width: 100%; height: auto; aspect-ratio: 4/3;">
                                </a>    
                            </td>
                            @if($order->Status=='1')
                                <td>Reject</td>
                                
                            @elseif($order->Status=='2')
                                <td>Aprove</td>
                            @else
                                <td>In Progress</td>
                            @endif
         
                            
                            
                        
                            <td>
                                <a href="{{ route('admin.orders.edit', $order->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form  class="d-inline" action="{{ route('admin.orders.destroy', $order->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button onClick="return confirm('Are you sure !')" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">Data Kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script>
    $(document).ready(function() {
        $('.popup-link').magnificPopup({
            type: 'image'
        });
    });
</script>
@endsection