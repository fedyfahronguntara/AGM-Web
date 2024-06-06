@extends('admin.layout')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit {{ $feedback->id }}</h1>
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
                <form action="{{ route('admin.feedbacks.update', $feedback) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="id">Feedback ID</label>
                        <input type="text" class="form-control" id="id" name="id" value="{{ $feedback->id }}" disable/>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $feedback->name}}" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ $feedback->email }}" />
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <input type="textarea" class="form-control" id="message" name="message" value="{{ $feedback->message }}" />
                    </div>
    
                   
                     <div class="form-group">   
                <select type="text" class="form-control" id="Status" name="Status" >
                    <option value="">Select Status</option>
                    <option value="0">Reject</option>
                    <option value="1">Approve</option>
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