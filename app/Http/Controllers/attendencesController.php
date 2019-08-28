<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\attendence;

class attendencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendences = attendence::all();
        return view('attendence.index')->with('attendences',$attendences);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('attendence.create');
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
            'shift'=>'required',
            'hours'=>'required',
            'status'=>'required',
        ]);

        //create department
        $atten = new attendence;
        $atten->name = $request->input('name');
        $atten->shift = $request->input('shift');
        $atten->workinghours = $request->input('hours');
        $atten->status = $request->input('status');

        //save
        $atten->save();
        return redirect('/attendence')->with('success','Saved Saccessfully');
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
        $attendences = attendence::find($id);
        return view('attendence.edit')->with('attendence',$attendences);
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
            'shift'=>'required',
            'hours'=>'required',
            'status'=>'required',
        ]);

        //create department
        $atten = attendence::find($id);
        $atten->name = $request->input('name');
        $atten->shift = $request->input('shift');
        $atten->workinghours = $request->input('hours');
        $atten->status = $request->input('status');

        //save
        $atten->save();
        return redirect('/attendence')->with('success','Updated Saccessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $atten = attendence::find($id);
        $atten->delete();

        return redirect('/attendence')->with('error','Deleted Saccessfully');
    }
}
