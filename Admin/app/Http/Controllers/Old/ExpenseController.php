<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
  public function index()
  {
      //
      $data = Expense::orderBy('created_at', 'desc')->get();
      return view('Expense.list', compact('data'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
      return view('Expense.add');
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
      Expense::create($input);
      return redirect()->route('Expense.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Expense  $expense
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
      $expense = Expense::find($id);
      return view('Expense.show', compact('expense'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Expense  $expense
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
      $expense = Expense::find($id);
      return view('Expense.edit', compact('expense'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Expense  $expense
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
      $expense = Expense::find($id);
      $input = $request->all();
      $expense->fill($input);
      $expense->save();
      return redirect()->route('Expense.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Expense  $expense
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
      $expense = Expense::find($id);
      $expense->delete();
      return redirect()->route('Expense.index');
  }
}
