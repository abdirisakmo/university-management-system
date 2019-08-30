@extends('layouts.admin')

@section('content')
         <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary"><a href="/departments" class="text-light" >Go Back</a></button>
            <form action="/departments" method="POST" class="form-group">
                @csrf

                <div class="form-row">
                    <div class="form-group col-12">
                        <input type="text" class="form-control" name="id" placeholder="Enter the ID" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="department Name" >
                    </div>
                    <div class="form-group col-6">
                        <label for="code">Code</label>
                        <input type="text" class="form-control" name="code" placeholder="Department code" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="name">Credit</label>
                        <input type="text" class="form-control" name="credit" placeholder="Credit Hours" >
                    </div>
                    <div class="form-group col-6">
                        <label for="name">Year</label>
                        <input type="text" class="form-control" name="year" placeholder="Year" >
                    </div>
                </div>
                    <label > Description</label>
                    <textarea id="desc" cols="149" rows="4" class="form-control" placeholder="type your description" name="desc" ></textarea>
                    <button type="submit" class="btn btn-primary" >Save</button>
                </form>
            </div>
         </div>
@endsection