@extends('master')
@section('content')
    <div class="card">
        <header class="card-header">
            <label style="text-align: center;background-color: coral; ">Create new Product</label>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="/store" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control">
                            <input class="input @error('title') is-danger @enderror"
                                   type="text" name="Name"  placeholder=" Product Name">
                        </div>

                    </div>
                    <div class="field">
                        <label class="label">price</label>
                        <div class="control">
                            <input class="input" placeholder="Price" type="number" name="price" value="" min="0">

                        </div>

                    </div>
                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                            <textarea class="textarea" name="description"
                                placeholder="Description du produit"></textarea>

                        </div>
                        @error('description')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <div class="control">

                                <input type="file" name="image" class="form-control">

                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button class="button is-link">Envoyer</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
