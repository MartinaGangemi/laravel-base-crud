@extends('layouts.app') 

@section('content') 


<div class="container">
    <div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>
    <form action="{{route('comics.store')}}" method="post">
        @csrf 
       

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title"  class="@error('title') is-invalid @enderror form-control" >
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" name="description" id="description"  class="form-control"  rows="4" >
        
    </div>
    <div class="form-group">
        <label for="thumb">Image</label>
        <input type="text" name="thumb" id="thumb"  class="@error('thumb') is-invalid @enderror form-control">
        @error('thumb')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" step="0.01" name="price" id="price" class="@error('price') is-invalid @enderror form-control">
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror 
    </div>
    <div class="form-group">
        <label for="series">series</label>
        <input type="text" name="series" id="series"  class="@error('price') is-invalid @enderror form-control">
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="sale_date">Sale Date</label>
        <input type="date" name="sale_date" id="sale_date"  class="@error('sale_date') is-invalid @enderror form-control">
        @error('sale_date')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="type">type</label>
        <input type="text" name="type" id="type"  class="form-control">
        
    </div>
    
    <button type="submit" class="btn btn-danger">Add Comic</button>
    
    </form>
    
</div>


@endsection 