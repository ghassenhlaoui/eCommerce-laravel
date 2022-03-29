@extends('master')
@section("content")
        
    <div class="but">
    <a class="btn btn-primary " href="/create">New Product</a> 
    </div>
    <table class="table">
        <thead>
        <tr>
            <th style="visibility:hidden;" scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Gallery</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($prod as $prods)
        <tr>
            <th style="visibility:hidden;" scope="row">1</th>
            <td>{{$prods->name}}</td>
            <td>{{$prods->price}}TND</td>
            <td>{{$prods->description}}</td>
            {{-- <td>{{$prods->description}}</td> --}}
            <td><img style="width: 100px;"  src="/img/{{$prods->gallery}}"> </td>
            <td><a class="btn btn-success" href="detail/{{$prods->id}}">Show</a> </td>
            <td><a class="btn btn-warning" href="edit/{{$prods->id}}">Edit</a> </td>
            <td><a class="btn btn-danger" href="delete/{{$prods->id}}">Delete</a> </td>

        </tr>
    @endforeach
        </tbody>
    </table>
@endsection
