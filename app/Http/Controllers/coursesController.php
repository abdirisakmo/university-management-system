<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;

class coursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses= course::all();
        return view('courses.index')->with('courses',$courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
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
            'name'=>'required',
            'code'=>'required',
            'credit'=>'required',
            'semester'=>'required',
            'department'=>'required'
        ]);
        //create new coourse
        $courses = new course;
        $courses->name = $request->input('name');
        $courses->code = $request->input('code');
        $courses->credit = $request->input('credit');
        $courses->semester = $request->input('semester');
        $courses->department = $request->input('department');

        //save
        $courses->save();
        return redirect('/courses')->with('success','Saved Saccessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //profile
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = course::find($id);
        return view('courses.edit')->with('course',$courses);
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
            'name'=>'required',
            'code'=>'required',
            'credit'=>'required',
            'semester'=>'required',
            'department'=>'required'
        ]);
        //create new coourse
        $courses=course::find($id);
        $courses->name = $request->input('name');
        $courses->code = $request->input('code');
        $courses->credit = $request->input('credit');
        $courses->semester = $request->input('semester');
        $courses->department = $request->input('department');

        //save
        $courses->save();
        return redirect('/courses')->with('success','Updated Saccessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courses = course::find($id);
        $courses->delete();

        return redirect('/courses')->with('error','Deleted Saccessfully');
    }
}
