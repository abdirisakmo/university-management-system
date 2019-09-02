@extends('layouts.admin')

@section('content')
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

<div class="card">
<div class="card-body">
     <h3>Students</h3>

          <div class="card-header">
                    {{-- Search form --}}
           <a href="/studentprint" class="btn btn-primary float-left"  >Print View</a>
     <form action="/students"  role="search">
            
                    <div class="box-tools">
                    <div class="input-group float-left" style="width: 250px;">
                    <input type="text" name="search" class="form-control" placeholder="Search">

                    <div class="input-group-btn">
                         <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                    </div>
                    </div>  
          {{-- date --}}
                    </form>
               {{-- END OF date--}}
               <form action="/students" >
                    <div class="form-row">
                         <div class="form-group col-4 float-left">
                              {{-- <label for="to">To:</label> --}}
                              <input type="date" name="from" class="form-control float-left">
                         </div>
                         <div class="form-group col-4">
                                   <input type="date" name="to" class="form-control float-left">
                              </div>
                              <div class="form-group col-1">
                                        <input type="submit"  value="filter" class="btn btn-success float-left">
                              </div>
                              <div class="form-group col-3">
                                        <button type="submit" class="btn btn-primary float-right" ><a href="/students/create" class="text-light"> Add student</a></button>
                              </div>
                              
                    </div>
               </form>
               
          </div>
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
                              <th>date</th>
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
                                   <td>{{$student->created_at}}</td>

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

