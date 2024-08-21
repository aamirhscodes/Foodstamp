<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Stamp;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders = Order::all();
        foreach($orders as $o)
        {
          $o->details = OrderDetail::where('order_id', '=', $o->id)->get();
        }
        return view('Order.list', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $order = Order::find($id);
        $details = OrderDetail::where('order_id', '=', $order->id)->get();
        foreach($details as $o)
        {
          $o->stamp = Stamp::find($o->stamp_id);
        }
        return view('Order.show', compact('order', 'details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function getQR($id)
    {
      $order = Order::find($id);
      $details = OrderDetail::where('order_id', '=', $order->id)->get();
      foreach($details as $o)
      {
        $o->qr_code = (string) Str::uuid();
        $o->save();
        $o->stamp = Stamp::find($o->stamp_id);
        $output_path = 'images/qrcodes/'.$o->qr_code.'.png';
        \QrCode::size(500)->format('png')->generate($o->qr_code, public_path($output_path));
      }
      return redirect()->route('Order.show', $order->id);
    }
}
