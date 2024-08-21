<?php

namespace App\Http\Controllers;
use App\Models\Agreement;
use App\Models\AgreementPayment;
use Illuminate\Http\Request;

class AgreementPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         //
         $data = AgreementPayment::orderBy('created_at', 'desc')->get();
         return view('AgreementPayment.list', compact('data'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         //
         $agreements = Agreement::all();
         return view('AgreementPayment.add', compact('agreements'));
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
         AgreementPayment::create($input);
         return redirect()->route('AgreementPayment.index');
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
         $payment = AgreementPayment::find($id);
         return view('AgreementPayment.show', compact('payment'));
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
         $agreements = Agreement::all();
         $payment = AgreementPayment::find($id);
         return view('AgreementPayment.edit', compact('payment', 'agreements'));
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
         $payment = AgreementPayment::find($id);
         $input = $request->all();
         $payment->fill($input);
         $payment->save();
         return redirect()->route('AgreementPayment.index');
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
         $payment = AgreementPayment::find($id);
         $payment->delete();
         return redirect()->route('AgreementPayment.index');
     }

     public function payments($id)
     {
       $data = AgreementPayment::where('agreement_id', '=', $id)->orderBy('created_at', 'desc')->get();
       return view('AgreementPayment.list', compact('data'));
     }
}
