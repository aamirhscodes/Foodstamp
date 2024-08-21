<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use Illuminate\Http\Request;

class AgreementController extends Controller
{
  public function index()
  {
      //
      $data = Agreement::orderBy('created_at', 'desc')->get();
      return view('Agreement.list', compact('data'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
      return view('Agreement.add');
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
      Agreement::create($input);
      return redirect()->route('Agreement.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Agreement  $agreement
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
      $agreement = Agreement::find($id);
      return view('Agreement.show', compact('agreement'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Agreement  $agreement
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
      $agreement = Agreement::find($id);
      return view('Agreement.edit', compact('agreement'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Agreement  $agreement
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
      $agreement = Agreement::find($id);
      $input = $request->all();
      $agreement->fill($input);
      $agreement->save();
      return redirect()->route('Agreement.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Agreement  $agreement
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
      $agreement = Agreement::find($id);
      $agreement->delete();
      return redirect()->route('Agreement.index');
  }
}
