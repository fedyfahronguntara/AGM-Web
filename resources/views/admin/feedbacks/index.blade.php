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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($feedbacks as $feedback)
                        <tr>
                            <td>{{ $feedback->id }}</td>
                            <td>{{ $feedback->name }}</td>
                            <td>{{ $feedback->email }}</td>
                            <td>{{ $feedback->message }}</td>
                            @if($feedback->Status=='0')
                                <td>Reject</td>
                                
                            @elseif($feedback->Status=='1')
                                <td>Aprove</td>
                            @else
                                <td>Tanpa Status</td>
                            @endif
 
                            <td>
                                <a href="{{ route('admin.feedbacks.edit', $feedback->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form  class="d-inline" action="{{ route('admin.feedbacks.destroy', $feedback->id) }}" method="POST">
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
@endsection