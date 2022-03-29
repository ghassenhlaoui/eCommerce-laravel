@extends('master')
@section('content')
    <div class="card">
        <header class="card-header">
            <h2 style="text-align:center;">Modify Product</h2>
        </header>
        <div class="card-content">
            <div class="content form">
                <form action="/editstore/{{ $prod->id  }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control">
                            <input class="input @error('title') is-danger @enderror" value="{{ $prod->name  }}"
                                   type="text" name="Name"  placeholder=" Product Name">
                        </div>

                    </div>
                    <div class="field">
                        <label class="label">price</label>
                        <div class="control">
                            <input class="input" type="number" name="price" value="{{ $prod->price  }}" min="0">

                        </div>

                    </div>
                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                        <textarea class="textarea" name="description"
                         placeholder="Description du film" style="height: 100px; width:178px;">{{ $prod->description  }}</textarea>

                        </div>
                        @error('description')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <br>
                    <div class="field">
                        <div class="control" style="text-align:center;">

                            <input type="file"  name="image" class="form-control">

                        </div>
                    </div>
                    <br><br>
                    <div class="field">
                        <div class="control">
                            <a class="btn btn-info" href="/Admin">Envoyer</a>
                        </div>
                    </div>
                    <br><br>
                </form>
            </div>
        </div>
    </div>
@endsection
