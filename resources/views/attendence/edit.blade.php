@extends('layouts.admin')

@section('content')
         <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary"><a href="/attendence" class="text-light" >Go Back</a></button>
            <form action="{{route('attendence.update',$attendence->id)}}" method="POST" class="form-group">
                @method('PATCH')
                @csrf
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" value="{{$attendence->name}}" name="name" placeholder="Employee Name" >
                    </div>
                    <div class="form-group col-6">
                        <label for="shift">Shift</label>
                        <input type="text" class="form-control" value="{{$attendence->shift}}" name="shift" placeholder="employee shift" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="hours">Working Hours</label>
                        <input type="text" class="form-control" value="{{$attendence->workinghours}}" name="hours" placeholder="working Hours" >
                    </div>
                    <div class="form-group col-6">
                        <label for="status">Status</label>
                        <input type="text" class="form-control"  value="{{$attendence->status}}" name="status" placeholder="status" >
                    </div>
                    <button type="submit" class="btn btn-primary" >Save</button>
                </form>
            </div>
         </div>
@endsection