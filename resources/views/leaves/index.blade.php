{{-- @extends('layouts.admin')

@section('content')
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

<div class="card">
<div class="card-body">
     <h3>Employee Leave</h3>
     <button type="submit" class="btn btn-primary float-right" ><a href="/attendence/create" class="text-light">Make attendence</a></button>
          <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                         <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Shift</th>
                              <th>leave Hours</th>
                              <th>status</th>
                              <th colspan="2">Actions</th>
                         </tr> --}}
                    {{-- </thead>
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
                         @endforeach --}}
                    {{-- </tbody>
                    </table>
                    
</div>
</div>
     

@endsection --}}

<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5.8 Datatables Tutorial - ItSolutionStuff.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
    
<div class="container">
    <h1>Laravel 5.8 Datatables Tutorial <br/> HDTuto.com</h1>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
               <th>ID</th>
               <th>Name</th>
               <th>Shift</th>
               <th>leave Hours</th>
               <th>status</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   
</body>
   
<script type="text/javascript">
  $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('leave.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'shift', name: 'shift'},
            {data: 'leavehours', name: 'hours'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
  });
</script>
</html>