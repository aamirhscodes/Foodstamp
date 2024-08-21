<?php

namespace App\Http\Controllers;
use App\Models\Partner;
use App\Models\PartnerPayment;
use Illuminate\Http\Request;

class PartnerPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         //
         $data = PartnerPayment::orderBy('created_at', 'desc')->get();
         return view('PartnerPayment.list', compact('data'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         //
         $partners = Partner::all();
         return view('PartnerPayment.add', compact('partners'));
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
         PartnerPayment::create($input);
         return redirect()->route('PartnerPayment.index');
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
         $payment = PartnerPayment::find($id);
         return view('PartnerPayment.show', compact('payment'));
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
         $partners = Partner::all();
         $payment = PartnerPayment::find($id);
         return view('PartnerPayment.edit', compact('payment', 'partners'));
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
         $payment = PartnerPayment::find($id);
         $input = $request->all();
         $payment->fill($input);
         $payment->save();
         return redirect()->route('PartnerPayment.index');
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
         $payment = PartnerPayment::find($id);
         $payment->delete();
         return redirect()->route('PartnerPayment.index');
     }
}
