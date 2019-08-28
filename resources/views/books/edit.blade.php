@extends('layouts.admin')

@section('content')
         <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary"><a href="/books" class="text-light" >Go Back</a></button>
            <form action="{{route('books.update',$books->id)}}" method="POST" class="form-group">
                @method('PATCH')
                @csrf

                <div class="form-row">
                    <div class="form-group col-12">
                            <label for="name">Name</label>
                             <input type="text" class="form-control" value="{{$books->name}}" name="name" placeholder="Enter the name" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="anthor">Anthor</label>
                        <input type="text" class="form-control" value="{{$books->anthor}}" name="anthor" placeholder="Anthor of the Book" >
                    </div>
                    <div class="form-group col-6">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" value="{{$books->type}}" name="type" placeholder="Type" >
                    </div>
                </div>
                <div class="form-row">
                        <div class="form-group col-6">
                                <label for="department">Department</label>
                                <select  class="form-control" name="department" id="department">
                                    @foreach ($departments as $department)
                                <option >{{$department->name}}</option>
                                    @endforeach
                                </select>
                              </div>
                    <div class="form-group col-6">
                        <label for="total">Total Quantity</label>
                        <input type="text" class="form-control" value="{{$books->totalquantity}}" name="total" placeholder="Total Quantity" >
                    </div>
                </div>
                    <button type="submit" class="btn btn-primary" >Save</button>
                </form>
            </div>
         </div>
@endsection