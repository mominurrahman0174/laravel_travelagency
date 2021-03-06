@extends('admin.master')

@section('content')
    <h4 class="header-title mb-4">Add Touriest Experience</h4>
    @if (session('Msg'))
        
    <p class="text-success">
        {{ session('Msg') }}
    </p>
    @endif
    <form method="post" action="{{ route('tourist_experPost') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group col-xl-8">
            <label for="title">Name:</label>
            <input id="title" class="form-control @error('title') is-invalid @enderror" type="text" name="title" placeholder="Enter Name">
            @error('title')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="description">Description:</label>
            <textarea id="description" class="form-control @error('description') is-invalid @enderror" type="text" name="description" placeholder="Enter description"></textarea>
            @error('description')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="role">Role:</label>
            <input id="role" class="form-control @error('role') is-invalid @enderror" type="text" name="role" placeholder="Enter role">
            @error('role')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="image">Image:</label>
            <input id="image" class="form-control @error('image') is-invalid @enderror" type="file" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
            @error('image')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
            <img  src="" width="400" id="blah">
        </div>
        <button type="submit" class="btn btn-primary">Add Tourist Experience</button>
    </form>
@endsection
