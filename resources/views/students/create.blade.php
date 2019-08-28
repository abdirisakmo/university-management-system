@extends('layouts.admin')

@section('content')
         <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary"><a href="/students" class="text-light" >Go Back</a></button>
            <form action="/students" method="POST" class="form-group">
                @csrf

                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="id">ID.</label>
                        <input type="text" name="id"  class="form-control " placeholder="Enter ID number " >
                    </div>
                    <div class="form-group col-6">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Student Name" >
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-12">
                        <div class="form-group">
                          <label for="department">Department</label>
                          <select  class="form-control" name="department" id="department">
                              @foreach ($departments as $department)
                          <option >{{$department->name}}</option>
                              @endforeach
                              {{-- <option >nursing</option>
                              <option >midwife</option>
                              <option >public health</option> --}}
                          </select>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="name">Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="phone" >
                    </div>
                    <div class="form-group col-6">
                        <label for="name">Gender</label><br>
                        Male :      <input type="radio" name="gender" value="male"checked>
                        Female :     <input type="radio" name="gender" value="female">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="name">Shift</label>
                        <input type="text" class="form-control" name="shift" placeholder="shift" >
                    </div>
                    <div class="form-group col-6">
                        <label for="name">Batch Number</label>
                        <input type="text" class="form-control" name="batch" placeholder="Batch number" >
                    </div>
                </div>
 
                    <label > Address</label>
                    <textarea id="address" cols="149" rows="4" placeholder="type your Address" name="address" ></textarea>
                    <button type="submit" class="btn btn-primary" >Save</button>
                </form>
            </div>
         </div>
@endsection