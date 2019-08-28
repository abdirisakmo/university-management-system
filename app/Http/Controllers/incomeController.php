<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\income;

class incomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $income = income::all();
        return view('income.index')->with('income',$income);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('income.create');
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
            'amount'=>'required',
            'description'=>'required',
        ]);

        //create department
        $inc = new income;
        $inc->id = $request->input('id');
        $inc->amount = $request->input('amount');
        $inc->description = $request->input('description');

        //save
        $inc->save();
        return redirect('/income')->with('success','Saved Saccessfully');
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
        $inc = income::find($id);
        return view('income.edit')->with('income',$inc); 
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
            'amount'=>'required',
            'description'=>'required',
        ]);

        //create department
        $inc = income::find($id);
        $inc->id = $request->input('id');
        $inc->amount = $request->input('amount');
        $inc->description = $request->input('description');

        //save
        $inc->save();
        return redirect('/income')->with('success','Updated Saccessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inc = income::find($id);
        $inc->delete();

        return redirect('/income')->with('error','Deleted Saccessfully');
    }
}
