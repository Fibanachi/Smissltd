@extends('welcome')

@section('content')


    <div class="container">
        @include('register.errors')
        <div class="row">
            <div class="col-md-8">
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" value="Email" name="email">
                        <br>
                        <input type="text" class="form-control" value="Password" name="password">
                        <br>
                        <button class="btn btn-primary">Login</button>
                        <a href="{{route('registerForm')}}" class="btn btn-info">Register</a>
                        <a href="{{route('map')}}" class="btn btn-warning">Map</a>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection