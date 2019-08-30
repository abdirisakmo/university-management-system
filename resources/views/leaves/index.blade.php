@extends('layouts.admin')

@section('content')
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

<div class="card">
<div class="card-body">
     <h3>Students</h3>
     <a href="/leave" class="btn btn-primary"  onClick="window.print()" >Print</a>
     <button type="submit" class="btn btn-primary float-right" ><a href="/leave/create" class="text-light"> Add student</a></button>
          <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                         <tr>
                              <th>ID</th>
                              <th>FullName</th>
                              <th>Shift</th>
                              <th>Leave Days</th>
                              <th>Status</th>
                              <th colspan="3">Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                         @foreach ($leaves as $leave)
                         <tr>
                                   <td>{{$leave->id}}</td>
                                   <td>{{$leave->name}}</td>
                                   <td>{{$leave->shift}}</td>
                                   <td>{{$leave->leavehours}}</td>
                                   <td>{{$leave->status}}</td>
                                   <td><a href="/leave/{{$leave->id}}/edit" class="btn btn-primary">Edit</a></td>
                                   <td> <form action="{{ route('leave.destroy', $leave->id)}}" method="post">
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