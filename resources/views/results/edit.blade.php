@extends('layouts.admin')

@section('content')
         <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary"><a href="/results" class="text-light" >Go Back</a></button>
                <form action="{{route('results.update',$results->id)}}" method="POST" class="form-group">
                        @method('PATCH')
                    @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="id">ID.</label>
                    <input type="text" name="id" id="student_id" value="{{$results->student_id}}" class="form-control" placeholder="Enter ID number " >
                    </div>
                       <div class="from-group col-md-6">
                        <label for="name">Full Name</label>
                       <input type="text" class="form-control" value="{{$results->sudent_name}}" name="name" placeholder="Student Name">
    
                       </div>
                </div>

                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="code">Course</label>
                <input type="text" class="form-control" name="course" value="{{$results->course}}" placeholder="Course " >
                 </div>
                 <div class="form-group col-md-6">
                    <label for="code">Department</label>
                    <input type="text" class="form-control" name="department" value="{{$results->department}}" placeholder="Department ">
                 </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="name">Attendence</label>
                        <input type="text" class="form-control" name="attendence" value="{{$results->attendence}}" placeholder="Attendence" >    
                    </div>
                    <div class="form-group col-md-3">
                    <label for="name">Assignment</label>
                    <input type="text" class="form-control" name="assignment" value="{{$results->assignment}}" placeholder="Assignment" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="name">mid_exam</label>
                        <input type="text" class="form-control" name="midexam" value="{{$results->midexam}}" placeholder="mid_Exam" >    
                    </div>
                    <div class="form-group col-md-3">
                        <label for="name">Final_Exam</label>
                        <input type="text" class="form-control" name="finalexam" value="{{$results->finalexam}}" placeholder="Final Exam" >    
                    </div>
                </div>
                   <label for="name">Result</label>
                    <input type="text" class="form-control" name="result" value="{{$results->result}}" placeholder="Result" >
                    <button type="submit" class="btn btn-primary" >Save</button>
                </form>
            </div>
         </div>
@endsection