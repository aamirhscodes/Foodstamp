<?php

namespace App\Http\Controllers;
use App\Models\Patwari;
use App\Models\PatwariPayment;
use Illuminate\Http\Request;

class PatwariPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         //
         $data = PatwariPayment::orderBy('created_at', 'desc')->get();
         return view('PatwariPayment.list', compact('data'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         //
         $patwaris = Patwari::all();
         return view('PatwariPayment.add', compact('patwaris'));
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
         PatwariPayment::create($input);
         return redirect()->route('PatwariPayment.index');
     }

     /**
      * Display the specified resource.
      *
      * @param  \App\Models\Agent  $payment
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         //
         $payment = PatwariPayment::find($id);
         return view('PatwariPayment.show', compact('payment'));
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Models\Agent  $payment
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         //
         $patwaris = Patwari::all();
         $payment = PatwariPayment::find($id);
         return view('PatwariPayment.edit', compact('payment', 'patwaris'));
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Models\Agent  $payment
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {
         //
         $payment = PatwariPayment::find($id);
         $input = $request->all();
         $payment->fill($input);
         $payment->save();
         return redirect()->route('PatwariPayment.index');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Models\Agent  $payment
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         //
         $payment = PatwariPayment::find($id);
         $payment->delete();
         return redirect()->route('PatwariPayment.index');
     }
}
