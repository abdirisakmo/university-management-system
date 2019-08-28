<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;

class employeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = employee::all();
        return view('employees.index')->with('employees',$employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
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
            'gender'=>'required',
            'phone'=>'required',
            'age'=>'required',
            'type'=>'required',
            'salarey'=>'required',
            'address'=>'required'
        ]);

        //create department
        $employees = new employee;
        $employees->id = $request->input('id');
        $employees->name = $request->input('name');
        $employees->gender = $request->input('gender');
        $employees->phone = $request->input('phone');
        $employees->age = $request->input('age');
        $employees->type = $request->input('type');
        $employees->money = $request->input('salarey');
        $employees->address = $request->input('address');

        //save
        $employees->save();
        return redirect('/employees')->with('success','saved Saccessfully');
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
        $employees = employee::find($id);
        return view('employees.edit')->with('employees',$employees);
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
            'gender'=>'required',
            'phone'=>'required',
            'age'=>'required',
            'type'=>'required',
            'salarey'=>'required',
            'address'=>'required'
        ]);

        //create department
        $employees = employee::find($id);
        $employees->id = $request->input('id');
        $employees->name = $request->input('name');
        $employees->gender = $request->input('gender');
        $employees->phone = $request->input('phone');
        $employees->age = $request->input('age');
        $employees->type = $request->input('type');
        $employees->money = $request->input('salarey');
        $employees->address = $request->input('address');

        //save
        $employees->save();
        return redirect('/employees')->with('success','Updated Saccessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employees = employee::find($id);
        $employees->delete();

        return redirect('/employees')->with('error','Deleted Saccessfully');
    }
}
