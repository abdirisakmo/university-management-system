@extends('layouts.admin')

@section('content')
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

<div class="card">
<div class="card-body">
     <h3>Students</h3>
     <a href="/students" class="btn btn-primary"  onClick="window.print()" >Print</a>
     <button type="submit" class="btn btn-primary float-right" ><a href="/students/create" class="text-light"> Add student</a></button>
          <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                         <tr>
                              <th>ID.no</th>
                              <th>FullName</th>
                              <th>department</th>
                              <th>Gender</th>
                              <th>phone</th>
                              <th>shift</th>
                              <th>batchno</th>
                              <th>address</th>
                              <th colspan="3">Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                         @foreach ($students as $student)
                         <tr>
                                   <td>{{$student->id}}</td>
                                   <td>{{$student->name}}</td>
                                   <td>{{$student->department}}</td>
                                   <td>{{$student->gender}}</td>
                                   <td>{{$student->phone}}</td>
                                   <td>{{$student->shift}}</td>
                                   <td>{{$student->batchno}}</td>
                                   <td>{{$student->address}}</td>

                                   <td><a href="/students/{{$student->id}}/edit" class="btn btn-primary">Edit</a></td>
                                   <td> <form action="{{ route('students.destroy', $student->id)}}" method="post">
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