@extends('layouts.app') 

@section('content') 
<div class="container">
<pc class="text-primary">sono la sezione comics</pc>
<table class="table">
    <thead>
        <tr>
            <th><strong>id</strong></th>
            <th><strong>title</strong></th>
            <th><strong>description</strong></th>
            <th><strong>thumb</strong></th>
            <th><strong>price</strong></th>
            <th><strong>series</strong></th>
            <th><strong>sale date</strong></th>
            <th><strong>type</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach($comics as $comics)
        <tr>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="btn btn-danger"><a class="text-light"href="{{route('comics.addComic')}}">aggiungi fumetto</a> </div>
</div>






@endsection 
