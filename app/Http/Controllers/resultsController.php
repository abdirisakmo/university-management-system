<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\result;

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
        return view('results.index')->with('results',$results);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('results.create');
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
            'student_id'=>'required',
            'course'=>'required',
            'attendence'=>'required',
            'assignment'=>'required',
            'midexam'=>'required',
            'finalexam'=>'required',
            'result'=>'required'
        ]);

        //create results
        $results = new result;
        $results->student_id = $request->input('student_id');
        $results->sudent_name = $request->input('name');
        $results->department = $request->input('department');
        $results->course = $request->input('course');
        $results->attendence = $request->input('attendence');
        $results->assignment = $request->input('assignment');
        $results->midexam = $request->input('midexam');
        $results->finalexam = $request->input('finalexam');
        $results->result = $request->input('result');

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
        //
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
        return view('results.edit')->with('results',$results);
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
            // as
            'course'=>'required',
            'attendence'=>'required',
            'assignment'=>'required',
            'midexam'=>'required',
            'finalexam'=>'required',
            'result'=>'required'
        ]);

        //create results
        $results = result::find($id);
        $results->student_id = $request->input('id');
        $results->sudent_name = $request->input('name');
        $results->department = $request->input('department');
        $results->course = $request->input('course');
        $results->attendence = $request->input('attendence');
        $results->assignment = $request->input('assignment');
        $results->midexam = $request->input('midexam');
        $results->finalexam = $request->input('finalexam');
        $results->result = $request->input('result');

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
