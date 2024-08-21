<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
  public function index()
  {
      //
      $data = Employee::orderBy('created_at', 'desc')->get();
      return view('Employee.list', compact('data'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
      return view('Employee.add');
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
      Employee::create($input);
      return redirect()->route('Employee.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Employee  $employee
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
      $employee = Employee::find($id);
      return view('Employee.show', compact('employee'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Employee  $employee
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
      $employee = Employee::find($id);
      return view('Employee.edit', compact('employee'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Employee  $employee
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
      $employee = Employee::find($id);
      $input = $request->all();
      $employee->fill($input);
      $employee->save();
      return redirect()->route('Employee.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Employee  $employee
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
      $employee = Employee::find($id);
      $employee->delete();
      return redirect()->route('Employee.index');
  }
}
