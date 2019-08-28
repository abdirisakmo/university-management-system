<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BarowBook;
use App\department;

class browBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brows = BarowBook::all();
        return view('barowBooks.index')->with('brows',$brows);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = department::all();
        return view('barowBooks.create')->with('departments',$departments);
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
            'anthor'=>'required',
            'type'=>'required',
            'department'=>'required',
            'total'=>'required'
        ]);

        //create department
        $brows = new BarowBook;
        $brows->name = $request->input('name');
        $brows->anthor = $request->input('anthor');
        $brows->type = $request->input('type');
        $brows->department = $request->input('department');
        $brows->totalquantity = $request->input('total');

        //save
        $brows->save();
        return redirect('/barowbooks')->with('success','Saved Saccessfully');
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
        $departments = department::all();
        $brows = BarowBook::find($id);
        return view('barowBooks.edit', compact('brows','departments'));
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
            'anthor'=>'required',
            'type'=>'required',
            'department'=>'required',
            'total'=>'required'
        ]);

        //create department
        $brows = BarowBook::find($id);
        $brows->name = $request->input('name');
        $brows->anthor = $request->input('anthor');
        $brows->type = $request->input('type');
        $brows->department = $request->input('department');
        $brows->totalquantity = $request->input('total');

        //save
        $brows->save();
        return redirect('/barowbooks')->with('success','Updated Saccessfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brows = BarowBook::find($id);
        $brows->delete();

        return redirect('/barowbooks')->with('error','Deleted Saccessfully');
    }
}
