@extends('layouts.admin')

@section('content')
         <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary"><a href="/income" class="text-light" >Go Back</a></button>

                <div class="card">
                        <form action="{{route('income.update',$income->id)}}" method="POST" class="form-group">
                            @method('PATCH')
                            @csrf
                    <div class="card-header">
                        create income
                    </div>
                    <div class="card-body">

                    <input type="text" class="form-control" value="{{$income->id}}" name="id" placeholder="Enter the ID" ><br>
                    <input type="text" class="form-control" value="{{$income->amount}}" name="amount" placeholder="Enter the Amount" ><br>
                    <input type="text" class="form-control" value="{{$income->created_at}}" name="date" placeholder="Enter the date" disabled ><br>
                    <input type="text" class="form-control" value="{{$income->description}}" name="description" placeholder="Enter the Description">


                    </div>
                    <div class="card-footer text-muted">
                        <button type="submit" class="btn btn-primary" >Save</button>
                    </div>
                </form>
                </div>
            </div>
         </div>
@endsection