@extends('layouts.admin')

@section('content')
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

<div class="card">
<div class="card-body">
     <h3>income</h3>
     <a href="/income" class="btn btn-primary"  onClick="window.print()" >Print</a>
     <button type="submit" class="btn btn-primary float-right" ><a href="/income/create" class="text-light"> new income</a></button>
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
                         @foreach ($income as $inc)
                         <tr>
                                   <td>{{$inc->id}}</td>
                                   <td>{{$inc->amount}}</td>
                                   <td>{{$inc->created_at}}</td>
                                   <td>{{$inc->description}}</td>
                                   <td><a href="/income/{{$inc->id}}/edit" class="btn btn-primary">Edit</a></td>
                                   <td> <form action="{{ route('income.destroy', $inc->id)}}" method="post">
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