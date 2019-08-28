@extends('layouts.admin')

@section('content')
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

<div class="card">
<div class="card-body">
     <h3>books</h3>
     <button type="submit" class="btn btn-primary float-right" ><a href="/books/create" class="text-light"> Add Department</a></button>
          <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                         <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Anthor</th>
                              <th>Type</th>
                              <th>Department</th>
                              <th>Total quantity</th>
                              <th colspan="2">Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                         @foreach ($books as $book)
                         <tr>
                                    <th>{{$book->id}}</th>
                                    <th>{{$book->name}}</th>
                                    <th>{{$book->anthor}}</th>
                                    <th>{{$book->type}}</th>
                                    <th>{{$book->department}}</th>
                                    <th>{{$book->totalquantity}}</th>
                                   <td><a href="/books/{{$book->id}}/edit" class="btn btn-primary">Edit</a></td>
                                   <td> <form action="{{ route('books.destroy', $book->id)}}" method="post">
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