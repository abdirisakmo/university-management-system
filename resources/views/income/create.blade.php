@extends('layouts.admin')

@section('content')
         <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary"><a href="/income" class="text-light" >Go Back</a></button>

                <div class="card">
                        <form action="/income" method="POST" class="form-group">
                            @csrf
                    <div class="card-header">
                        create income
                    </div>
                    <div class="card-body">

                               <input type="text" class="form-control" name="id" placeholder="Enter the ID" ><br>
                               <input type="text" class="form-control" name="amount" placeholder="Enter the Amount" ><br>
                               <input type="text" class="form-control" name="date" placeholder="Enter the date" disabled ><br>
                               <input type="text" class="form-control" name="description" placeholder="Enter the Description">


                    </div>
                    <div class="card-footer text-muted">
                        <button type="submit" class="btn btn-primary" >Save</button>
                    </div>
                </form>
                </div>
            </div>
         </div>
@endsection