<?php

namespace App\Http\Controllers;

use App\Models\Patwari;
use Illuminate\Http\Request;

class PatwariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Patwari::orderBy('created_at', 'desc')->get();
        return view('Patwari.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Patwari.add');
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
        $input = $request->all();
        Patwari::create($input);
        return redirect()->route('Patwari.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patwari  $patwari
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $patwari = Patwari::find($id);
        return view('Patwari.show', compact('patwari'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patwari  $patwari
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $patwari = Patwari::find($id);
        return view('Patwari.edit', compact('patwari'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patwari  $patwari
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $patwari = Patwari::find($id);
        $input = $request->all();
        $patwari->fill($input);
        $patwari->save();
        return redirect()->route('Patwari.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patwari  $patwari
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $patwari = Patwari::find($id);
        $patwari->delete();
        return redirect()->route('Patwari.index');
    }
}
