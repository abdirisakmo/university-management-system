@extends('layouts.admin')

@section('content')
    <h3>List of Users</h3>
          <div class="card">
            <div class="card-body mb-2 bg-info">
                <button type="submit" class="btn btn-primary" ><a href="/users/create" class="text-light">Add new user</a></button>
                <input type="search" name="serch" id="serch" >
                <ul class="list-group">
                    @foreach ($users as $user)
                    <li class="list-group-item bg-light text-dark mb-1 ">{{$user->name}}
                      <button type="submit" class="btn btn-danger float-right">
                          <a href="/users/{{$user->id}} " class="text-light">show</a>
                      </button>
                    </li>
                    @endforeach
                  </ul>
            </div>
          </div>
@endsection