<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Algorithm;

class AlgorithmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $algorithms = Algorithm::all();
        return view('algorithms.index')->with('algorithms', $algorithms);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $algorithm = Algorithm::find($id);
        return view('algorithms.show')->with('algorithm', $algorithm);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('algorithms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'algorithm' => 'required',
            'description' => 'required'
        ]);
        $algorithm = new Algorithm;
        $algorithm->name = $request->input('name');
        $algorithm->algorithm = $request->input('algorithm');
        $algorithm->description = $request->input('description');
        $algorithm->user_id = auth()->user()->id;
        $algorithm->save();

        return redirect('/algorithms')->with('success', 'New algorithm created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $algorithm = Algorithm::find($id);
        return view('algorithms.edit')->with('algorithm', $algorithm);
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
        $this->validate($request, [
            'name' => 'required',
            'algorithm' => 'required',
            'description' => 'required'
        ]);
        $algorithm = Algorithm::find($id);
        $algorithm->name = $request->input('name');
        $algorithm->algorithm = $request->input('algorithm');
        $algorithm->description = $request->input('description');
        $algorithm->save();

        return redirect('/algorithms/'.$algorithm->id)->with('success', 'Algorithm Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $algorithm = Algorithm::find($id);
        $algorithm->delete();

        return redirect('/algorithms')->with('success', 'Algorithm Removed');
    }
}
