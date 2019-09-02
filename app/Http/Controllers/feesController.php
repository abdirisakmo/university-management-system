<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fee;
use App\student;
use DB;
use App\department;

class feesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fees = fee::all();
        $students = student::all();

        return view('fees.index', compact('fees','students'));

    }
    public function payment($id)
    {

        $fees=  DB::select('select * from fees where id = :id', ['id' => $id]);
        $students = student::find($id);
        $departments = department::all();
        // $fees=fee::find($id);
        return view('fees.report', compact('fees','students','departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fees.create');
    }
    public function create2($id)
    {
        $students = student::find($id);
        return view('fees.create')->with('students',$students);
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
            'semester'=>'required',
            'required'=>'required',
            'amount'=>'required',
            'balance'=>'required',
            'discount'=>'required',
            'add'=>'required',
            'drop'=>'required',
            'refund'=>'required',
        ]);

        //create department
        $fees = new fee;
        $fees->id = $request->input('id');
        $fees->semester = $request->input('semester');
        $fees->required = $request->input('required');
        $fees->amount = $request->input('amount');
        $fees->blance = $request->input('balance');
        $fees->discount = $request->input('discount');
        $fees->add = $request->input('add');
        $fees->drop = $request->input('drop');
        $fees->refund = $request->input('refund');

        //save
        $fees->save();
        return redirect('/fees')->with('success','Saved Saccessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fees = fee::find($id);
        $students = student::find($id);

        return view('fees.show', compact('fees','students'));

        // return fee::find($id);
    }


    public function autocomplete(Request $request)
    {
        //autocomplete function
        $data = student::select("name")
                ->where("name","LIKE","%{$request->input('query')}%")
                ->get();
   
        return response()->json($data);

        // $search =$request -> get('search');
        // $students = DB::table('students')->where('name','like','%'.$search.'%')->paginate();
        // return view('fees.show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
