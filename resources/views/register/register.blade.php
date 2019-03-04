@extends('welcome')

@section('content')




    <div class="container">
        @include('register.errors')
        <div class="row">
            <div class="col-md-8">
                <form action="/sm4/public/register" method="post">
                    <div class="form-group">
                        @csrf

                        <input type="text" class="form-control" value="Email" name="email">
                        <input type="text" class="form-control" value="Name" name="name">
                        <input type="text" class="form-control" value="Adress" name="address" id="pac-input">
                        <input type="password" class="form-control" value="Password" name="password">
                        <input type="password" class="form-control" value="Password confirm" name="password_confirmation">


                        <button class="btn btn-primary">Register</button>
                        <a href="{{route('login')}}" class="btn btn-warning">Home Page</a>

                    </div>
                </form>
            </div>
        </div>
    </div>
   @include('register.google')

@endsection