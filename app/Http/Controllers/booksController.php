<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\department;

class booksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index')->with('books',$books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = department::all();
        return view('books.create')->with('departments',$departments);
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
        $books = new Book;
        $books->name = $request->input('name');
        $books->anthor = $request->input('anthor');
        $books->type = $request->input('type');
        $books->department = $request->input('department');
        $books->totalquantity = $request->input('total');

        //save
        $books->save();
        return redirect('/books')->with('success','Saved Saccessfully');
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
        // $departments = department::all();
        // return view('books.edit')->with('departments',$departments);
        $departments = department::all();
        $books = Book::find($id);
        return view('books.edit', compact('books','departments'));

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
        $books = Book::find($id);
        $books->name = $request->input('name');
        $books->anthor = $request->input('anthor');
        $books->type = $request->input('type');
        $books->department = $request->input('department');
        $books->totalquantity = $request->input('total');

        //save
        $books->save();
        return redirect('/books')->with('success','Updated Saccessfully');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $books = Book::find($id);
        $books->delete();

        return redirect('/books')->with('error','Deleted Saccessfully');
    }
}
