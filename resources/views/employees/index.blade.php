@extends('layouts.admin')

@section('content')
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

<div class="card">
<div class="card-body">
     <h3>Employee</h3>
     <button type="submit" class="btn btn-primary float-right" ><a href="/employees/create" class="text-light"> Add employee</a></button>
          <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                         <tr>
                              <th>Emp_ID</th>
                              <th>FullName</th>
                              <th>Gender</th>
                              <th>Phone</th>
                              <th>Age</th>
                              <th>Type</th>
                              <th>shift</th>
                              <th>salarey</th>
                              <th colspan="3">Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                         @foreach ($employees as $employee)
                         <tr>
                                   <td>{{$employee->id}}</td>
                                   <td>{{$employee->name}}</td>
                                   <td>{{$employee->gender}}</td>
                                   <td>{{$employee->phone}}</td>
                                   <td>{{$employee->age}}</td>
                                   <td>{{$employee->type}}</td>
                                   <td>{{$employee->shift}}</td>
                                   <td>{{$employee->money}}</td>
                                   <td><a href="/employees/{{$employee->id}}/edit" class="btn btn-primary">Edit</a></td>
                                   <td> <form action="{{ route('employees.destroy', $employee->id)}}" method="post">
                                   @csrf
                                   @method('DELETE')
                                   <button class="btn btn-danger" type="submit">Delete</button>
                                 </form> </td>
                         </tr>

                         @endforeach

                    </tbody>
                    <tfoot>
                         <th>Emp_ID</th>
                         <th>FullName</th>
                         <th>Gender</th>
                         <th>Phone</th>
                         <th>Age</th>
                         <th>Type</th>
                         <th>shift</th>
                         <th>Salarey</th>
                        <th colspan="3">Actions</th>
                         </tr>
                    </tfoot>
                    </table>
                    
</div>
</div>
     

@endsection