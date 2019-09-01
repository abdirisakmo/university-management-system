@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <img src="{{ asset('dist/img/adddiabba.jpg')}}" class="float-left"  style="width:80px;" alt="User Image">
<img src="{{ asset('dist/img/adddiabba.jpg')}}" class="float-right"  style="width:80px;" alt="User Image">
<h2 class="text-center" >AdisAbaba Medical university</h2>
    <p>We hereby certify that Mr/Mss <b>{{$students->name}}</b> with id <b>{{$students->id}}</b> of <b>{{$students->department}}</b> 
    department has following remaing balance owned to the university</p>
    </div>
    <div class="card-body">
        <a href="/fees/{{$students->id}}" onclick="window.print()" class="btn" >print payment</a>
        <table class="table">
            <thead>
            <tr>
                <th>Semester</th>
                <th>A.Required</th>
                <th>Amount Paid</th>
                <th>Balance</th>
                <th>Discount</th>
                <th>Add</th>
                <th>Drop</th>
                <th>Refund</th>    
            </tr>
            </thead>
            <tbody>
                @foreach ($fees as $fee)
                <tr>
                        <td>{{$fee->semester}}</td>
                        <td>{{$fee->required}}</td>
                        <td>{{$fee->amount}}</td>
                        <td>{{$fee->blance}}</td>
                        <td>{{$fee->discount}}</td>
                        <td>{{$fee->add}}</td>
                        <td>{{$fee->drop}}</td>
                        <td>{{$fee->refund}}</td>
                    </tr>
                @endforeach
            </tbody>
           
        </table>
        <h4 class="float-right mr-3 mt-3">Balance:3000</h4>
    </div>
    <div class="card-footer text-muted">
        <a href="/fees/{{$students->id}}">GO Back</a>
    </div>
</div>

@endsection
   