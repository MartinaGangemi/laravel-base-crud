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
        <td class="py-1 px-2">{{ $comic['id'] }}</td>
                <td class="py-1 px-2">{{ $comic['title'] }}</td>
                <td class="py-1 px-2">${{ $comic['price'] }}</td>
                <td class="py-1 px-2">{{ $comic['series'] }}</td>
                <td class="py-1 px-2">{{ $comic['sale_date'] }}</td>
                <td class="py-1 px-2">{{ $comic['type'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="btn btn-danger"><a class="text-light"href="{{route('comics.addComic')}}">aggiungi fumetto</a> </div>
</div>






@endsection 
