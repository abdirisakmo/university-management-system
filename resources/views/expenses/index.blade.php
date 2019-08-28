@extends('layouts.admin')

@section('content')
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

<div class="card">
<div class="card-body">
     <h3>Expanses</h3>
     <a href="/expenses" class="btn btn-primary"  onClick="window.print()" >Print</a>
     <button type="submit" class="btn btn-primary float-right" ><a href="/expenses/create" class="text-light"> new income</a></button>
          <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                         <tr>
                              <th>ID.no</th>
                              <th>Amount</th>
                              <th>Date</th>
                              <th>Description</th>
                              <th colspan="2">Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                         @foreach ($expenses as $expense)
                         <tr>
                                   <td>{{$expense->id}}</td>
                                   <td>{{$expense->amount}}</td>
                                   <td>{{$expense->created_at}}</td>
                                   <td>{{$expense->description}}</td>
                                   <td><a href="/expenses/{{$expense->id}}/edit" class="btn btn-primary">Edit</a></td>
                                   <td> <form action="{{ route('expenses.destroy', $expense->id)}}" method="post">
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