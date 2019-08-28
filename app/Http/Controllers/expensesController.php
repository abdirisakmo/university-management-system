<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\expense;

class expensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenses= expense::all();
        return view('expenses.index')->with('expenses',$expenses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenses.create');
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
        $exp = new expense;
        $exp->id = $request->input('id');
        $exp->amount = $request->input('amount');
        $exp->description = $request->input('description');

        //save
        $exp->save();
        return redirect('/expenses')->with('success','Saved Saccessfully');
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
        $exp = expense::find($id);
        return view('expenses.edit')->with('exp',$exp); 
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
        $exp = expense::find($id);
        $exp->id = $request->input('id');
        $exp->amount = $request->input('amount');
        $exp->description = $request->input('description');

        //save
        $exp->save();
        return redirect('/expenses')->with('success','Updated Saccessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exp = expense::find($id);
        $exp->delete();

        return redirect('/expenses')->with('error','Deleted Saccessfully');
    }
}
