@extends('layouts.app') 

@section('content') 
<div class="container">
<div class="btn btn-danger"><a class="text-light"href="{{route('comics.create')}}">aggiungi fumetto</a> </div>
<table class="table" style="width:100%">
    <thead>
        <tr>
            <th scope="col" ><strong>Id</strong></th>
            <th scope="col"><strong>Image</strong></th>
            <th scope="col" ><strong>Title</strong></th>
            <th scope="col" ><strong>Description</strong></th>
            <th scope="col"><strong>Series</strong></th>
            <th scope="col" ><strong>Sale date</strong></th>
            <th scope="col"><strong>Price</strong></th>
            <th scope="col"style="width:10%"><strong>Type</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $comics as $index => $comic)
        <tr>
            <td class="py-1 px-2">{{ $comic->id }}</td>
            <td class="py-1 px-2 comic-box"><img src="{{ $comic->thumb }}"  alt=""></td>
            <td class="py-1 px-2">{{ $comic->title }}</td>
            <td class="py-1 px-2 description-table">{{ $comic->description }}</td>
            <td class="py-1 px-2">{{ $comic->series }}</td>
            <td class="py-1 px-2">{{date_format(date_create_from_format("Y-m-d",$comic->sale_date),"d-m-Y")}}</td>
            <td class="py-1 px-2">{{ $comic->price }}</td>
            <td class="py-1 px-2">{{ $comic->type }}</td>
            <td class="py-1 px-2"><a href="#">
                <a href="{{route('comics.show', $comic->id )}}"><button class="btn btn-success mb-2">Visualizza</button></a>
                <a href="#"><button class="btn btn-primary mb-2">Modifica</button></a>
                <a href="#"><button class="btn btn-danger">Elimina</button></a>
            </td>
            <td class="py-1 px-2"></td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>






@endsection 
