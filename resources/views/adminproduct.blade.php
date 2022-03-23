@extends('master')
@section("content")
    <a class="button is-info" href="/create">Créer un
        Produit</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">description</th>
            <th scope="col">gallery</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($prod as $prods)
        <tr>
            <th scope="row">1</th>
            <td>{{$prods->name}}</td>
            <td>{{$prods->price}}</td>
            <td>{{$prods->description}}</td>
            <td>{{$prods->description}}</td>
            <td><img style="width: 100px;"  src="/img/{{$prods->gallery}}"> </td>
            <td><a href="edit/{{$prods->id}}">Edit</a> </td>
            <td><a href="delete/{{$prods->id}}">Delete</a> </td>

        </tr>
    @endforeach
        </tbody>
    </table>
@endsection
