@extends('admin.layout')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Car</h1>
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
                <form action="{{ route('admin.cars.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" />
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}" />
                    </div>
                    <div class="form-group">
                        <label for="duration">Capacity</label>
                        <input type="text" class="form-control" id="duration" name="duration" value="{{ old('duration') }}" />
                    </div>
                    <div class="form-group">
                        <label for="image1">Image 1</label>
                        <input type="file" class="form-control" id="image1" name="image1" />
                        <label for="image2">Image 2</label>
                        <input type="file" class="form-control" id="image2" name="image2" />
                        <label for="image3">Image 3</label>
                        <input type="file" class="form-control" id="image3" name="image3" />
                        
                    </div>
                    <div class="form-group">
                        <label for="image">Status</label>
                        <input type="text" class="form-control" id="status" name="status"/>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="textarea" class="form-control" id="description" name="description" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection