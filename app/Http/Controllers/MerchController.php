<?php

namespace App\Http\Controllers;

use App\Merch;
use Illuminate\Http\Request;

class MerchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $merches = Merch::all();

      return view('merch.index', compact('merches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('merch.create');
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
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
      ]);
        $merch = Merch::create($request->all());

        return redirect('/merch/' . $merch->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Merch $merch)
    {
        return view('merch.show', compact('merch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Merch $merch)
    {
        return view('merch.edit', compact('merch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Merch $merch)
    {
      $merch->update($request->all());

      return redirect('/merch/' . $merch->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Merch $merch)
    {
      $merch->delete();
      return redirect('/merch');
    }
}
