<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\department;

class studentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $students= student::all();
        //  $departments =department::all();
        // return view('students.index')->with('students',$students);

         $students= student::all();
        //  $departments =department::all();
        return view('students.index', compact('students'));

        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments =department::all();
        return view('students.create')->with('departments',$departments);
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
            'name'=>'required',
            'department'=>'required',
            'gender'=>'required',
            'phone'=>'required',
            'shift'=>'required',
            'batch'=>'required',
            'address'=>'required'
        ]);

        //create student
        $students = new student;
        $students->id = $request->input('id');
        $students->name = $request->input('name');
        $students->department = $request->input('department');
        $students->gender = $request->input('gender');
        $students->phone = $request->input('phone');
        $students->shift = $request->input('shift');
        $students->batchno = $request->input('batch');
        $students->address = $request->input('address');

        //save
        $students->save();
        return redirect('/students')->with('success','Saved successfully');
            // return 123;
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
        $students= student::find($id);
        // return view('students.edit')->with('students',$students);
        $departments = department::all();
        return view('students.edit', compact('students','departments'));
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
            'id'=>'required',
            'name'=>'required',
            'department'=>'required',
            'gender'=>'required',
            'phone'=>'required',
            'shift'=>'required',
            'batch'=>'required',
            'address'=>'required'
        ]);

        //create student
        $students = student::find($id);
        $students->id = $request->input('id');
        $students->name = $request->input('name');
        $students->department = $request->input('department');
        $students->gender = $request->input('gender');
        $students->phone = $request->input('phone');
        $students->shift = $request->input('shift');
        $students->batchno = $request->input('batch');
        $students->address = $request->input('address');

        //save
        $students->save();
        return redirect('/students')->with('success','Updated Saccessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = student::find($id);
        $students->delete();

        return redirect('/students')->with('error','deleted successfully');
    }
}
