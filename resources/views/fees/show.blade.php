@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        Student profile pic
                    </div>
                    <div class="card-body">
                            <img src="{{ asset('dist/img/avatar.png')}}" alt="User Avatar" class="img-circle">
                    </div>
                </div>
                   
            </div>
            <div class="col-8">
                   <div class="card">
                       <div class="card-header">
                           Student information
                       </div>
                       <div class="card-body">
                         Student ID:{{$students->id}}<br>
                           <hr>
                        Student Name : {{$students->name}}<br>
                        <hr>
                        Department: {{$students->department}}  <br>
                        <hr>
                        Gender: {{$students->gender}}  <br>
                        <hr>
                        phone: {{$students->phone}}  <br>
                        <hr>
                        shift: {{$students->shift}}  <br>
                        <hr>
                        Registred: {{$students->created_at}} <br>
                       </div>
                       <div class="card-footer text-muted">
                           <button type="submit" class="btn btn-primary float-left" >Make Payment</button>

                       </div>
                   </div>
            </div>
        </div>
    </div>
@endsection