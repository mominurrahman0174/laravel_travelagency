@extends('admin.master')

@section('content')
    <h4 class="header-title mb-4">Add Destinaion</h4>
    @if (session('Msg'))
        
    <p class="text-success">
        {{ session('Msg') }}
    </p>
    @endif
    <form method="post" action="{{ route('destinationPost') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group col-xl-8">
            <label for="title">Destination title:</label>
            <input id="title" class="form-control @error('title') is-invalid @enderror" type="text" name="title" placeholder="Enter destinaion title">
            @error('title')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="price">Price:</label>
            <input id="price" class="form-control @error('price') is-invalid @enderror" type="text" name="price" placeholder="Enter destinaion price">
            @error('price')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="day">Day:</label>
            <input id="day" class="form-control @error('day') is-invalid @enderror" type="text" name="day" placeholder="Enter Tour duration">
            @error('day')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="country">Country:</label>
            <input id="country" class="form-control @error('country') is-invalid @enderror" type="text" name="country" placeholder="Enter Country">
            @error('country')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="city">City/rest of location:</label>
            <input id="city" class="form-control @error('city') is-invalid @enderror" type="text" name="city" placeholder="Enter Tour duration">
            @error('city')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="form-group col-xl-8">
            <label for="description">Description:</label>
            <textarea id="description" class="form-control @error('description') is-invalid @enderror" type="text" name="description"  placeholder="Enter Description"></textarea>
            @error('description')
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
            <img style="background: #00ACB2; color:#fff" src="" width="200" id="blah" alt="insert image">
        </div>
        <div class="form-group col-xl-8">
            <label for="popular">Mark as popular:</label>
            <input id="popular" class=" @error('popular') is-invalid @enderror" type="checkbox" name="popular">
            @error('popular')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="tour_details" style="font-weight: bold; font-size:37px; text-align:center">Tour Details:</label>
            <textarea id="tour_details" class=" " type="text" name="tour_details" style="height: 300px"></textarea>
            @error('tour_details')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Add Destination</button>
    </form>
@endsection