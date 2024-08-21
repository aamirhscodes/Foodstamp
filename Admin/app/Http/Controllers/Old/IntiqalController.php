<?php

namespace App\Http\Controllers;

use App\Models\Intiqal;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

class IntiqalController extends Controller
{
  public function index()
  {
      //
      $data = Intiqal::orderBy('created_at', 'desc')->get();
      return view('Intiqal.list', compact('data'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
      return view('Intiqal.add');
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
      $input = $request->except(['attachment1', 'attachment2']);
      $intiqal = Intiqal::create($input);
      if ($request->file('attachment1')!=null)
      {
        $file = $request->file('attachment1');
        $extension = $file->getClientOriginalExtension();
        $destinationPath = public_path() . '/uploads';
        $filename = Str::uuid().".".$extension;
        $file->move($destinationPath,$filename);
        $intiqal->attachment1 = $filename;
        $intiqal->save();
      }

      if ($request->file('attachment2')!=null)
      {
        $file = $request->file('attachment2');
        $extension = $file->getClientOriginalExtension();
        $destinationPath = public_path() . '/uploads';
        $filename = Str::uuid().".".$extension;
        $file->move($destinationPath,$filename);
        $intiqal->attachment2 = $filename;
        $intiqal->save();
      }
      return redirect()->route('Intiqal.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Intiqal  $intiqal
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
      $intiqal = Intiqal::find($id);
      return view('Intiqal.show', compact('intiqal'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Intiqal  $intiqal
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
      $intiqal = Intiqal::find($id);
      return view('Intiqal.edit', compact('intiqal'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Intiqal  $intiqal
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
      $intiqal = Intiqal::find($id);
      $input = $request->except(['attachment1', 'attachment2']);
      $intiqal->fill($input);
      $intiqal->save();
      if ($request->file('attachment1')!=null)
      {
        $file = $request->file('attachment1');
        $extension = $file->getClientOriginalExtension();
        $destinationPath = public_path() . '/uploads';
        $filename = Str::uuid().".".$extension;
        $file->move($destinationPath,$filename);
        $intiqal->attachment1 = $filename;
        $intiqal->save();
      }

      if ($request->file('attachment2')!=null)
      {
        $file = $request->file('attachment2');
        $extension = $file->getClientOriginalExtension();
        $destinationPath = public_path() . '/uploads';
        $filename = Str::uuid().".".$extension;
        $file->move($destinationPath,$filename);
        $intiqal->attachment2 = $filename;
        $intiqal->save();
      }
      return redirect()->route('Intiqal.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Intiqal  $intiqal
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
      $intiqal = Intiqal::find($id);
      $intiqal->delete();
      return redirect()->route('Intiqal.index');
  }
}
