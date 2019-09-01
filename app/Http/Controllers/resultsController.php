<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\result;
use App\student;
use App\department;
use DB;

class resultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results= result::all();
        $students=student::all();
        return view('results.index', compact('results','students'));
    }


    // Gba Calculations
    public function grade($id)
    {

        $results=  DB::select('select * from results where id = :id', ['id' => $id]);
        $students = student::find($id);
        return view('results.grades', compact('results','students'));
        // return view('results.grades');
  
       
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $students=student::find($id);
        $departments = department::all();
        return view('results.create', compact('departments','students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'id'=>'required',
            'course'=>'required',
            'attendence'=>'required',
            'assignment'=>'required',
            'midexam'=>'required',
            'finalexam'=>'required',
            'result'=>'required',
            'grade'=>'required'
        ]);

        //create results
        $results = new result;
        $results->id = $request->input('id');
        $results->department = $request->input('department');
        $results->course = $request->input('course');
        $results->attendence = $request->input('attendence');
        $results->assignment = $request->input('assignment');
        $results->midexam = $request->input('midexam');
        $results->finalexam = $request->input('finalexam');
        $results->result = $request->input('result');
        $results->grade = $request->input('grade');

        //save
        $results->save();
        return redirect('/results')->with('success','saved Saccessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $results = result::find($id);
        $students = student::find($id);

        return view('results.show', compact('results','students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $results = result::find($id);
        $students = student::find($id);
        return view('results.edit', compact('results','students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'course'=>'required',
            'attendence'=>'required',
            'assignment'=>'required',
            'midexam'=>'required',
            'finalexam'=>'required',
            'result'=>'required',
            'grade'=>'required'
        ]);

        //create results
        $results = result::find($id);
        $students = student::find($id);
        $students->id = $request->input('id');
        $results->department = $request->input('department');
        $results->course = $request->input('course');
        $results->attendence = $request->input('attendence');
        $results->assignment = $request->input('assignment');
        $results->midexam = $request->input('midexam');
        $results->finalexam = $request->input('finalexam');
        $results->result = $request->input('result');
        $results->grade = $request->input('grade');

        //save
        $results->save();
        return redirect('/results')->with('success','updated Saccessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $results = result::find($id);
        $results->delete();

        return redirect('/results')->with('error','Deleted Saccessfully');
    }
}
