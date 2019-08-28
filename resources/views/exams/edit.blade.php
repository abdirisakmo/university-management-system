@extends('layouts.admin')

@section('content')
         <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary"><a href="/exams" class="text-light" >Go Back</a></button>
                <form action="{{route('exams.update',$exam->id)}}" method="POST" class="form-group">
                        @method('PATCH')
                    @csrf
                    <label for="id">Exam_ID.</label>
                <input type="text" name="id" id="id" class="form-control" value="{{$exam->id}}" placeholder="enter ID number " disabled>
                    <label for="name">Department</label>
                <input type="text" class="form-control" name="department" value="{{$exam->department}}" placeholder="Department" >
                    <label for="code">Course</label>
                    <input type="text" class="form-control" name="course" value="{{$exam->course}}" placeholder="Course " >
                    <label for="name">Type</label>
                    <input type="text" class="form-control" name="type" value="{{$exam->type}}" placeholder="Type" >
                    <label for="name">Semester</label>
                    <input type="text" class="form-control" name="semester" value="{{$exam->semister}}" placeholder="Semester" >
                    <label for="name">Exam_code</label>
                    <input type="text" class="form-control" name="code" value="{{$exam->code}}" placeholder="Exam code" >
                    <button type="submit" class="btn btn-primary" >Save</button>
                </form>
            </div>
         </div>
@endsection