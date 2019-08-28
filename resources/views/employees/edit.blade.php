@extends('layouts.admin')

@section('content')
         <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary"><a href="/employees" class="text-light" >Go Back</a></button>
                <form action="{{route('employees.update',$employees->id)}}" method="POST" class="form-group">
                    @method('PATCH')
                    @csrf
                    <label for="id">ID.</label>
            <input type="text" name="id" id="id" class="form-control" value="{{$employees->id}}" placeholder="Enter Emp_ID">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" value="{{$employees->name}}" placeholder="Employee Name" >
                    <label for="code">Gender</label>
                    <input type="text" class="form-control" name="gender" value="{{$employees->gender}}" placeholder="Gender " >
                    <label for="name">Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{$employees->phone}}" placeholder="Phone" >
                    <label for="name">Age</label>
                    <input type="text" class="form-control" name="age" value="{{$employees->age}}" placeholder="Age" >
                    <label for="name">Type</label>
                    <input type="text" class="form-control" name="type" value="{{$employees->type}}" placeholder="Type" >
                    <label for="name">Salary</label>
                    <input type="text" class="form-control" name="salarey" value="{{$employees->money}}" placeholder="The Salrey" >
                    <label > Address</label>
            <textarea id="address" cols="149" rows="4" placeholder="Type your Address" name="address" >{{$employees->address}}</textarea>
                    <button type="submit" class="btn btn-primary" >Save</button>
                </form>
            </div>
         </div>
@endsection