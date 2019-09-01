@extends('layouts.admin')

@section('content')
<h3>List of students</h3>
<div class="card">
  <div class="card-body">
      {{-- Search form --}}
     <form action="/students"  role="search">
            
          <div class="box-tools">
            <div class="input-group " style="width: 340px;">
              <input type="text" name="search" class="form-control" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>  
        </form>
     {{-- END OF SERCH --}}
      <ul class="list-group">
          @foreach ($students as $student)
          <li class="list-group-item bg-info text-white mb-1 ">{{$student->name}}
            <button type="submit" class="btn btn-danger float-right">
                <a href="/results/{{$student->id}} " class="text-light">show</a>
            </button>
          </li>
          @endforeach
        </ul>
  </div>
</div>
@endsection