@extends('layouts.admin')

@section('content')
         <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary"><a href="/fees" class="text-light" >Go Back</a></button>
            <form action="/fees" method="POST" class="form-group">
                @csrf

                <div class="form-row">
                    <div class="form-group col-12">
                    <input type="text" class="form-control" value="{{$students->id}}" name="id"  placeholder="Enter the ID" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="semester">Semester</label>
                        <input type="text" class="form-control" name="semester" placeholder="Semester" >
                    </div>
                    <div class="form-group col-6">
                        <label for="required">Required</label>
                        <input type="text" class="form-control" name="required" placeholder="Amount required" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="amount">Amount</label>
                        <input type="text" class="form-control" name="amount" placeholder="Amount" >
                    </div>
                    <div class="form-group col-6">
                        <label for="blance">Balance</label>
                        <input type="text" class="form-control" name="balance" placeholder="Balance" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="discount">Discount</label>
                        <input type="text" class="form-control" name="discount" placeholder="Discount" >
                    </div>
                    <div class="form-group col-6">
                        <label for="add">Add</label>
                        <input type="text" class="form-control" name="add" placeholder="Add" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="drop">Drop</label>
                        <input type="text" class="form-control" name="drop" placeholder="Drop" >
                    </div>
                    <div class="form-group col-6">
                        <label for="refund">Refund</label>
                        <input type="text" class="form-control" name="refund" placeholder="Refund" >
                    </div>
                </div>
                    <button type="submit" class="btn btn-primary" >Save</button>
                </form>
            </div>
         </div>
@endsection