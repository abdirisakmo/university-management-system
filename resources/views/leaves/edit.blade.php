@extends('layouts.admin')

@section('content')
         <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary"><a href="/leave" class="text-light" >Go Back</a></button>
            <form action="{{route('leave.update',$leaves->id)}}" method="POST" class="form-group">
                @csrf
                @method('PATCH')

                <div class="form-row">
                    <div class="form-group col-12">
                    <input type="text" value="{{$leaves->id}}" class="form-control" name="id" placeholder="Enter the ID" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="name">Employee Name</label>
                        <input type="text" value="{{$leaves->name}}" class="form-control" name="name" placeholder="employee Name" >
                    </div>
                    <div class="form-group col-6">
                        <label for="shift">Shift</label>
                        <input type="text" value="{{$leaves->shift}}" class="form-control" name="shift" placeholder="Shift" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="days">days</label>
                        <input type="text" value="{{$leaves->leavehours}}" class="form-control" name="days" placeholder="Leave Time" >
                    </div>
                    <div class="form-group col-6">
                        <label for="status">Status</label>
                        <input type="text" value="{{$leaves->status}}" class="form-control" name="status" placeholder="Status" >
                    </div>
                </div>
                     <button type="submit" class="btn btn-primary" >Save</button>
                </form>
            </div>
         </div>
@endsection