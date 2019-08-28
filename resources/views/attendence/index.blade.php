@extends('layouts.admin')

@section('content')
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

<div class="card">
<div class="card-body">
     <h3>Attendences</h3>
     <button type="submit" class="btn btn-primary float-right" ><a href="/attendence/create" class="text-light">Make attendence</a></button>
          <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                         <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Shift</th>
                              <th>Working Hours</th>
                              <th>status</th>
                              <th colspan="2">Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                         @foreach ($attendences as $attendence)
                         <tr>
                                   <td>{{$attendence->id}}</td>
                                   <td>{{$attendence->name}}</td>
                                   <td>{{$attendence->shift}}</td>
                                   <td>{{$attendence->workinghours}}</td>
                                   <td>{{$attendence->status}}</td>
                                   <td><a href="/attendence/{{$attendence->id}}/edit" class="btn btn-primary">Edit</a></td>
                                   <td> <form action="{{ route('attendence.destroy', $attendence->id)}}" method="post">
                                   @csrf
                                   @method('DELETE')
                                   <button class="btn btn-danger" type="submit">Delete</button>
                                 </form> </td>
                         </tr>
                         @endforeach
                    </tbody>
                    </table>
                    
</div>
</div>
     

@endsection