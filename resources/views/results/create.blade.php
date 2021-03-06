@extends('layouts.admin')

@section('content')
         <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary"><a href="/results" class="text-light" >Go Back</a></button>
            <form action="/results" method="POST" class="form-group">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="id">ID.</label>
                    <input type="text" name="id" value="{{$students->id}}" id="id" class="form-control" placeholder="Enter ID number " >
                    </div>
                </div>

                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="code">Course</label>
                    <input type="text" class="form-control" name="course" placeholder="Course " >
                 </div>
                 <div class="form-group col-md-6">
                   <div class="form-group">
                                  <label for="department">Department</label>
                                  <select  class="form-control" name="department" id="department">
                                      @foreach ($departments as $department)
                                  <option >{{$department->name}}</option>
                                      @endforeach
                                  </select>
                            </div>
                </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="name">Attendence</label>
                        <input type="text" class="form-control" name="attendence" placeholder="Attendence" >    
                    </div>
                    <div class="form-group col-md-3">
                    <label for="name">Assignment</label>
                    <input type="text" class="form-control" name="assignment" placeholder="Assignment" >
                    </div>
                    <div class="form-group col-md-3">
                        <label for="name">mid_exam</label>
                        <input type="text" class="form-control" name="midexam" placeholder="mid_Exam" >    
                    </div>
                    <div class="form-group col-md-3">
                        <label for="name">Final_Exam</label>
                        <input type="text" class="form-control" name="finalexam" placeholder="Final Exam" >    
                    </div>
                </div>
                   <div class="form-row">
                       <div class="form-group col-6">
                            <label for="result">Result</label>
                       <input type="text" class="form-control"  name="result" placeholder="Result" >
                       </div>
                       <div class="form-group col-6">
                            <label for="grade">Grade</label>
                            <input type="text" class="form-control" name="grade" placeholder="Grade" >
                       </div>
                   </div>
                    <button type="submit" class="btn btn-primary" >Save</button>
                </form>
            </div>
         </div>
@endsection