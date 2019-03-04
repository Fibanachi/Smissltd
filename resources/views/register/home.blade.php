@extends ('welcome')

@section('content')
    <div class="container">
        <div class="row">
            <h3>All User</h3>
                <div class="col-md-10 col-md-offset-1"></div>
                    <table class="table">
                        <theard>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Address</td>
                                <td>Password</td>
                            </tr>
                        </theard>

                        <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{$task->id}}<a href="{{route('home', $task->id)}}">Show</a></td>
                                    <td>{{$task->name}}</td>
                                    <td>{{$task->email}}</td>
                                    <td>{{$task->address}}</td>
                                    <td>{{$task->password}}</td>
                                    <br>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
        </div>
        <a href="{{route('login')}}" class="btn btn-primary">Login</a>
    </div>

    @include('register.map')


    @endsection