@extends('master')
@section("content")
<div class="container custom-login">
    <div class = "row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="/login" method="POST">
              <div class="input-group">
                @csrf
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="exampleInputEmail1" type="email" class="form-control" name="email" placeholder="Email">
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="exampleInputPassword1" type="password" class="form-control" name="password" placeholder="Password">
              </div>
              
              <br>
                {{-- <div class="form-group">
                  @csrf
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div> --}}
                <div class="but">
                <button type="submit" class="btn btn-default ">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>    
@endsection