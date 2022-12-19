<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programs;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Programs::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=> 'required',
            'description'=> 'required',
        ]);
        return Programs::create($request->all());
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
        $program = Programs::find($id);

        if(!$program){
            return 'Program not found';
        };

        return $program;
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
        $program = Programs::find($id);
        if(!$program){
            return 'Course not found';
        };

        $program->update($request->all());
        return $program;
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
        $program = Programs::find($id);
        if(!$program){
            return 'Program not found';
        }
        Programs::destroy($id);
        return 'Program deleted successfully';
    }


     /**
     * Search by course by name
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {

       $program = Programs::where('name', 'like', '%'.$name.'%')->get();
       return $program;

    }
}
