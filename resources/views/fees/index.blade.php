@extends('layouts.admin')

@section('content')

    <h3>List of students</h3>
          <div class="card">
            <div class="card-body">
                {{-- <form action="/search" method="GET">
                  <input type="search" name="search" id="search" >
                  <button type="submit" class="btn btn-primary">Search</button>
                </form> --}}
                <input class="typeahead form-control" type="text">
                <ul class="list-group">
                    @foreach ($students as $student)
                    <li class="list-group-item bg-info text-white mb-1 ">{{$student->name}}
                      <button type="submit" class="btn btn-danger float-right">
                          <a href="/fees/{{$student->id}} " class="text-light">show</a>
                      </button>
                    </li>
                    @endforeach
                  </ul>
            </div>
          </div>
@endsection