@extends('layouts.admin')

@section('content')
     {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css"> --}}

<div class="card">
<div class="card-body">
     <h3>Results</h3>

     <a href="/results" class="btn btn-primary"  onClick="window.print()" >Print Preview</a>


     {{-- <button type="submit" class="btn btn-primary float-left" > <a href="/print">Print</a> </button> --}}
     <button type="submit" class="btn btn-primary float-right" ><a href="/results/create" class="text-light">New Result</a></button>
     <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                         <tr>
                              
                              <th>Student ID.</th>
                              <th>FullName</th>
                              <th>Course</th>
                              <th>Department</th>
                              <th>Attendece</th>
                              <th>Assignment</th>
                              <th>Mid_Eaxm</th>
                              <th>Final_Exam</th>
                              <th>Result</th>
                              <th colspan="3">Actions</th>
                         </tr>

                    </thead>
                    <tbody>
                         @foreach ($results as $result)
                         <tr>
                                   {{-- <td>{{$result->id}}</td> --}}
                                   <td>{{$result->student_id}}</td>
                                   <td>{{$result->sudent_name}}</td>
                                   <td>{{$result->course}}</td>
                                   <td>{{$result->department}}</td>
                                   <td>{{$result->attendence}}</td>
                                   <td>{{$result->assignment}}</td>
                                   <td>{{$result->midexam}}</td>
                                   <td>{{$result->finalexam}}</td>
                                   <td>{{$result->result}}</td>
                                   <td><a href="/results/{{$result->id}}/edit"><i class="fas fa-edit btn-primrey"></i></a></td>
                                   <td> <form action="{{ route('results.destroy', $result->id)}}" method="post">
                                   @csrf
                                   @method('DELETE')
                                  <button type="submit"><i class="far fa-trash-alt btn-danger" type="submit"></i></button>
                                 </form> </td>
                         </tr>

                         @endforeach

                    </tbody>
                    <tfoot>
                         <th>Student ID.</th>
                         <th>FullName</th>
                         <th>Course</th>
                         <th>Department</th>
                         <th>Attendece</th>
                         <th>Assignment</th>
                         <th>Mid_Eaxm</th>
                         <th>Final_Exam</th>
                         <th>Result</th>
                        <th colspan="3">Actions</th>
                         </tr>
                    </tfoot>
                    </table>
                    
</div>
</div>
     

@endsection