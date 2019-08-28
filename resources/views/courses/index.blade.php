@extends('layouts.admin')

@section('content')
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

<div class="card">
<div class="card-body">
     <h3>Courses</h3>
     <button type="submit" class="btn btn-primary float-right" ><a href="/courses/create" class="text-light"> Add courses</a></button>
          <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                         <tr>
                              <th>Course Name</th>
                              <th>Code</th>
                              <th>credit</th>
                              <th>semester</th>
                              <th>department</th>
                              <th colspan="3">Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                         @foreach ($courses as $course)
                         <tr>
                                   <td>{{$course->name}}</td>
                                   <td>{{$course->code}}</td>
                                   <td>{{$course->credit}}</td>
                                   <td>{{$course->semester}}</td>
                                   <td>{{$course->department}}</td>
                                   <td><a href="/courses/{{$course->id}}/edit" class="btn btn-primary">Edit</a></td>
                                   <td> <form action="{{ route('courses.destroy', $course->id)}}" method="post">
                                   @csrf
                                   @method('DELETE')
                                   <button class="btn btn-danger" type="submit">Delete</button>
                                 </form> </td>
                         </tr>

                         @endforeach

                    </tbody>
                    <tfoot>
                         <tr>
                            <th>Course Name</th>
                            <th>Code</th>
                            <th>credit</th>
                            <th>semester</th>
                            <th>department</th>
                            <th colspan="3">Actions</th>
                         </tr>
                    </tfoot>
                    </table>
                    
</div>
</div>
     

@endsection