@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>



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
          <script type="text/javascript">
            var path = "{{ route('autocomplete') }}";
            $('input.typeahead').typeahead({
                source:  function (query, process) {
                return $.get(path, { query: query }, function (data) {
                        return process(data);
                    });
                }
            });
        </script>
@endsection