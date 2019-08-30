<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\exam;
use App\department;

class examsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exams = exam::all();
        return view('exams.index')->with('exams',$exams);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = department::all();
        return view('exams.create')->with('departments',$departments);
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
            'department'=>'required',
            'course'=>'required',
            'type'=>'required',
            'semester'=>'required',
            'code'=>'required'
        ]);

        //create department
        $exam = new exam;
        $exam->department = $request->input('department');
        $exam->course = $request->input('course');
        $exam->type = $request->input('type');
        $exam->semister = $request->input('semester');
        $exam->code = $request->input('code');

        //save
        $exam->save();
        return redirect('/exams')->with('success','saved Saccessfully');
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
        $exam = exam::find($id);
        return view('exams.edit')->with('exam',$exam);
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
            'department'=>'required',
            'course'=>'required',
            'type'=>'required',
            'semester'=>'required',
            'code'=>'required'
        ]);

        //create department
        $exam = exam::find($id);
        $exam->department = $request->input('department');
        $exam->course = $request->input('course');
        $exam->type = $request->input('type');
        $exam->semister = $request->input('semester');
        $exam->code = $request->input('code');

        //save
        $exam->save();
        return redirect('/exams')->with('success','Updated Saccessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exam = exam::find($id);
        $exam->delete();

        return redirect('/exams')->with('error','Deleted Saccessfully');
    }
}
