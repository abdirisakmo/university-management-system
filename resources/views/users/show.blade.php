@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        user profile pic
                    </div>
                    <div class="card-body">
                            <img src="{{ asset('dist/img/avatar.png')}}" alt="User Avatar" class="img-circle">
                    </div>
                </div>
                   
            </div>
            <div class="col-8">
                   <div class="card">
                       <div class="card-header">
                           user information
                       </div>
                       <div class="card-body">
                         ID:{{$users->id}}<br>
                           <hr>
                        Name : {{$users->name}}<br>
                        <hr>
                        Email: {{$users->email}}  <br>
                        <hr>
                        Created at: {{$users->created_at}} <br>
                       </div>
                       <div class="card-footer text-muted">
                           <button type="submit" class="btn btn-primary float-left" ><a href="/users/{{$users->id}}/edit" class="text-light">Edit</a></button>
                           
                           <form action="{{ route('users.destroy', $users->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger float-right" type="submit">Delete</button>

                       </div>
                   </div>
            </div>
        </div>
    </div>
@endsection