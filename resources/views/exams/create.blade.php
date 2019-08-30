@extends('layouts.admin')

@section('content')
         <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary"><a href="/exams" class="text-light" >Go Back</a></button>
            <form action="/exams" method="POST" class="form-group">
                @csrf
                    <label for="id">Exam_ID.</label>
                    <input type="text" name="id" id="id" class="form-control" placeholder="enter ID number " disabled>
                            <div class="form-group">
                              <label for="department">Department</label>
                              <select  class="form-control" name="department" id="department">
                                  @foreach ($departments as $department)
                              <option >{{$department->name}}</option>
                                  @endforeach
                              </select>
                    </div>
                    <label for="code">Course</label>
                    <input type="text" class="form-control" name="course" placeholder="Course " >
                    <label for="name">Type</label>
                    <input type="text" class="form-control" name="type" placeholder="Type" >
                    <label for="name">Semester</label>
                    <input type="text" class="form-control" name="semester" placeholder="Semester" >
                    <label for="name">Exam_code</label>
                    <input type="text" class="form-control" name="code" placeholder="Exam code" >
                    <button type="submit" class="btn btn-primary" >Save</button>
                </form>
            </div>
         </div>
@endsection