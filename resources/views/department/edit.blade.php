@extends('layouts.admin')

@section('content')
         <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary"><a href="/departments" class="text-light" >Go Back</a></button>
            <form action="{{route('departments.update',$department->id)}}" method="POST" class="form-group">
                @method('PATCH')
                @csrf

                <div class="form-row">
                        <div class="form-group col-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" value="{{$department->name}}" name="name" placeholder="department Name" >
                        </div>
                        <div class="form-group col-6">
                            <label for="code">Code</label>
                            <input type="text" class="form-control" value="{{$department->code}}" name="code" placeholder="Department code" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="name">Credit</label>
                            <input type="text" class="form-control"  value="{{$department->credit}}"  name="credit" placeholder="Credit Hours" >
                        </div>
                        <div class="form-group col-6">
                            <label for="name">Year</label>
                            <input type="text" class="form-control" value="{{$department->year}}" name="year" placeholder="Year" >
                        </div>
                    </div>
                        <label > Description</label>
                        <textarea id="desc" cols="149" rows="4" placeholder="type your description" name="desc" >{{$department->description}}</textarea>
                        <button type="submit" class="btn btn-primary" >Save</button>
                </form>
            </div>
         </div>
@endsection