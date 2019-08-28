@extends('layouts.admin')

@section('content')
         <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary"><a href="/courses" class="text-light" >Go Back</a></button>
            <form action="{{route('courses.update',$course->id)}}" method="POST" class="form-group">
                @method('PATCH')
                @csrf
                    <label for="name">Course Name</label>
                    <input type="text" class="form-control" name="name" value="{{$course->name}}" placeholder="Course Name" >
                    <label for="code">Code</label>
                    <input type="text" class="form-control" value="{{$course->code}}" name="code" placeholder="Course code" >
                    <label for="name">Credit</label>
                    <input type="text" class="form-control" value="{{$course->credit}}" name="credit" placeholder="Credit Hours" >
                    <label for="name">Semester</label>
                    <input type="text" class="form-control" value="{{$course->semester}}" name="semester" placeholder="Course semester" >
                    <label for="name">Department</label>
                    <input type="text" class="form-control" value="{{$course->department}}" name="department" placeholder="department" >
                    <button type="submit" class="btn btn-primary" >Save</button>
                </form>
            </div>
         </div>
@endsection