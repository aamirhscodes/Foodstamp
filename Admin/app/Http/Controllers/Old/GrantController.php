<?php

namespace App\Http\Controllers;

use App\Models\Grant;
use Illuminate\Http\Request;

class GrantController extends Controller
{
  public function index()
  {
      //
      $data = Grant::orderBy('created_at', 'desc')->get();
      return view('Grant.list', compact('data'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
      return view('Grant.add');
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
      Grant::create($input);
      return redirect()->route('Grant.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Grant  $grant
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
      $grant = Grant::find($id);
      return view('Grant.show', compact('grant'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Grant  $grant
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
      $grant = Grant::find($id);
      return view('Grant.edit', compact('grant'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Grant  $grant
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
      $grant = Grant::find($id);
      $input = $request->all();
      $grant->fill($input);
      $grant->save();
      return redirect()->route('Grant.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Grant  $grant
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
      $grant = Grant::find($id);
      $grant->delete();
      return redirect()->route('Grant.index');
  }
}
