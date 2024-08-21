<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use App\Models\Employee;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
       //
       $data = Salary::orderBy('created_at', 'desc')->get();
       return view('Salary.list', compact('data'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       //
       $employees = Employee::all();
       return view('Salary.add', compact('employees'));
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
       Salary::create($input);
       return redirect()->route('Salary.index');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Agent  $salary
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       //
       $salary = Salary::find($id);
       return view('Salary.show', compact('salary'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Agent  $salary
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       //
       $employees = Employee::all();
       $salary = Salary::find($id);
       return view('Salary.edit', compact('salary', 'employees'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Agent  $salary
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
       //
       $salary = Salary::find($id);
       $input = $request->all();
       $salary->fill($input);
       $salary->save();
       return redirect()->route('Salary.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Agent  $salary
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       //
       $salary = Salary::find($id);
       $salary->delete();
       return redirect()->route('Salary.index');
   }
}
