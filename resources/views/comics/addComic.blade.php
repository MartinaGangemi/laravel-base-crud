@extends('layouts.app') 

@section('content') 

<div class="container">
    <form action="{{route('comics.store')}}" method="post">
        @csrf 
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title"  class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" name="description" id="description"  class="form-control" >
    </div>
    <div class="form-group">
        <label for="thumb">Image</label>
        <input type="text" name="thumb" id="thumb"  class="form-control">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" name="price" id="price" class="form-control">
    </div>
    <div class="form-group">
        <label for="series">series</label>
        <input type="text" name="series" id="series"  class="form-control">
    </div>
    <div class="form-group">
        <label for="sale_date">Sale Date</label>
        <input type="text" name="sale_date" id="sale_date"  class="form-control">
    </div>
    <div class="form-group">
        <label for="type">type</label>
        <input type="text" name="type" id="type"  class="form-control">
    </div>
    
    <button type="submit" class="btn btn-danger">Add Comic</button>
    
    </form>
    
</div>


@endsection 