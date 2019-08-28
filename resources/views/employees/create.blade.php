@extends('layouts.admin')

@section('content')
         <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary"><a href="/employees" class="text-light" >Go Back</a></button>
            <form action="/employees" method="POST" class="form-group">
                @csrf
                    <label for="id">ID.</label>
                    <input type="text" name="id" id="id" class="form-control" placeholder="Enter Emp_ID">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Employee Name" >
                    <label for="code">Gender</label>
                    <input type="text" class="form-control" name="gender" placeholder="Gender " >
                    <label for="name">Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Phone" >
                    <label for="name">Age</label>
                    <input type="text" class="form-control" name="age" placeholder="Age" >
                    <label for="name">Type</label>
                    <input type="text" class="form-control" name="type" placeholder="Type" >
                    <label for="name">Salary</label>
                    <input type="text" class="form-control" name="salarey" placeholder="The Salrey" >
                    <label > Address</label>
                    <textarea id="address" cols="149" rows="4" placeholder="Type your Address" name="address" ></textarea>
                    <button type="submit" class="btn btn-primary" >Save</button>
                </form>
            </div>
         </div>
@endsection