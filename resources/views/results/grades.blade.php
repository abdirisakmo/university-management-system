@extends('layouts.admin')

@section('content')

<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-exam" role="tab" aria-controls="nav-home" aria-selected="true">Exam lists</a>
      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-gba" role="tab" aria-controls="nav-profile" aria-selected="false">GBA </a>
     </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-exam" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="card">
            <div class="card-header">
                Exam garades
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Department</th>
                            <th>Attendece </th>
                            <th>Assignment</th>
                            <th>Mid Exam</th>
                            <th>Final Exam</th>
                            <th>Results</th>
                            <th>Grade</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($results as $result)
                      <tr>
                            <td>{{$result->course}}</td>
                            <td>{{$result->department}}</td>
                            <td>{{$result->attendence}}</td>
                            <td>{{$result->assignment}}</td>
                            <td>{{$result->midexam}}</td>
                            <td>{{$result->finalexam}}</td>
                            <td>{{$result->result}}</td>
                            <td>{{$result->grade}}</td>
                            <td><a href="/results/{{$students->id}}/edit" class="btn btn-primary">Edit</a></td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-muted">
                Footer
            </div>
        </div>    
    </div>
    <div class="tab-pane fade" id="nav-gba" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="card">
                <div class="card-header">
                    GBA Calculations
                </div>
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
                <div class="card-footer text-muted">
                    Footer
                </div>
            </div>
    </div>
  </div>

@endsection
