<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dccomic;

class DccomicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dccomics = Dccomic::all();
        /* dd($dccomics); */
        return view('dccomics.index', compact('dccomics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dccomics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $dccomic=new Dccomic();
        $dccomic->fill($data);
        $dccomic->save();
        return redirect()->route('dccomics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dccomic = Dccomic::findOrFail($id);
        return view ('dccomics.show', compact('dccomic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dccomic = Dccomic::findOrFail($id);
        return view('dccomics.edit', compact('dccomic'));
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
        $data=$request->all();
        $dccomic= Dccomic::findOrFail($id);
        $dccomic->update($data);
        return redirect()->route('dccomics.show', $dccomic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dccomic= Dccomic::findOrFail($id);
        $dccomic->delete();
        return redirect()->route('dccomics.index');
    }
}
