@extends('layouts.admin')

@section('content')
         <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary"><a href="/students" class="text-light" >Go Back</a></button>
            <form action="{{route('students.update',$students->id)}}" method="POST" class="form-group">
                    @method('PATCH')
                @csrf

                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="id">ID.</label>
                        <input type="text" name="id" value="{{$students->id}}" class="form-control" placeholder="enter ID number " >
                    </div>
                    <div class="form-group col-6">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" value="{{$students->name}}" name="name" placeholder="Student Name" >
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
                              </select>
                            </div>
                        </div>
                    </div>  

                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="name">Phone</label>
                        <input type="text" class="form-control"  value="{{$students->phone}}"   name="phone" placeholder="phone" >
                    </div>
                    <div class="form-group col-6">
                        <label for="name">Gender</label><br>
                    Male :      <input type="radio" name="gender" value="male"{{$students->gender == 'male' ? 'checked':''}}>
                        Female :     <input type="radio" name="gender" value="female"{{$students->gender == 'female' ? 'checked':''}}>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="name">Shift</label>
                        <input type="text" class="form-control" value="{{$students->shift}}" name="shift" placeholder="shift" >
                    </div>
                    <div class="form-group col-6">
                        <label for="name">Batch Number</label>
                        <input type="text" class="form-control" value="{{$students->batchno}}"  name="batch" placeholder="Batch number" >
                    </div>
                </div>
 
                    <label > Address</label>
                    <textarea id="address" cols="149" rows="4" placeholder="type your Address" name="address" >{{$students->address}}</textarea>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
         </div>
@endsection