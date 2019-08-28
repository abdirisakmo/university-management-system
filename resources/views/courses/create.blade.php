@extends('layouts.admin')

@section('content')
         <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary"><a href="/courses" class="text-light" >Go Back</a></button>
            <form action="/courses" method="POST" class="form-group">
                @csrf
                    <label for="name">Course Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Course Name" >
                    <label for="code">Code</label>
                    <input type="text" class="form-control" name="code" placeholder="Course code" >
                    <label for="name">Credit</label>
                    <input type="text" class="form-control" name="credit" placeholder="Credit Hours" >
                    <label for="name">Semester</label>
                    <input type="text" class="form-control" name="semester" placeholder="Course semester" >
                    <label for="name">Department</label>
                    <input type="text" class="form-control" name="department" placeholder="department" >
                    <button type="submit" class="btn btn-primary" >Save</button>
                </form>
            </div>
         </div>
@endsection