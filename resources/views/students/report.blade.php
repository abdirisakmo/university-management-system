@extends('layouts.admin')

@section('content')
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

<div class="card">
<div class="card-body">
     <a href="/studentprint" onclick="window.print()" class="btn" >print</a>
               <h3 class="text-center">Student Information Record</h3>
          <table  class="table" style="width:100%">
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
                              <th>date</th>
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
                                   <td>{{$student->created_at}}</td>
                         </tr>

                         @endforeach

                    </tbody>
                    </table>
                    
</div>
</div>
     
@endsection

