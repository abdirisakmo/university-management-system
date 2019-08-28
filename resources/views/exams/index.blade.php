@extends('layouts.admin')

@section('content')
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

<div class="card">
<div class="card-body">
     <h3>Exams</h3>
     <button type="submit" class="btn btn-primary float-right" ><a href="/exams/create" class="text-light">New exam</a></button>
          <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                         <tr>
                              <th>Exam_ID</th>
                              <th>Department</th>
                              <th>Course</th>
                              <th>type</th>
                              <th>semester</th>
                              <th>Exam_code</th>
                              <th>year</th>
                              <th colspan="3">Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                         @foreach ($exams as $exam)
                         <tr>
                                   <td>{{$exam->id}}</td>
                                   <td>{{$exam->department}}</td>
                                   <td>{{$exam->course}}</td>
                                   <td>{{$exam->type}}</td>
                                   <td>{{$exam->semister}}</td>
                                   <td>{{$exam->code}}</td>
                                   <td>{{$exam->created_at}}</td>
                                   <td><a href="/exams/{{$exam->id}}/edit" class="btn btn-primary">Edit</a></td>
                                   <td> <form action="{{ route('exams.destroy', $exam->id)}}" method="post">
                                   @csrf
                                   @method('DELETE')
                                   <button class="btn btn-danger" type="submit">Delete</button>
                                 </form> </td>
                         </tr>

                         @endforeach

                    </tbody>
                    <tfoot>
                            <th>Exam_ID</th>
                            <th>Department</th>
                            <th>Course</th>
                            <th>type</th>
                            <th>semester</th>
                            <th>Exam_code</th>
                            <th>year</th>
                        <th colspan="3">Actions</th>
                         </tr>
                    </tfoot>
                    </table>
                    
</div>
</div>
     

@endsection