<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\StampUse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
  public function index()
  {
      //
      $restaurants = Restaurant::all();
      foreach($restaurants as $r)
      {
        $r->usage = StampUse::where('restaurant_id', '=', $r->id)->count();
      }
      return view('Restaurant.list', compact('restaurants'));
  }

  public function create()
  {
      //
      return view('Restaurant.add');
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
      $restaurant = new Restaurant;
      $restaurant->title = $request->title;
      $restaurant->address = $request->address;
      $restaurant->name = $request->name;
      $restaurant->email  = $request->email;
      $restaurant->password = Hash::make($request->password);
      if ($request->file('image')!=null)
      {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $destinationPath = public_path() . '/uploads';
        $filename = Str::uuid().".".$extension;
        $file->move($destinationPath,$filename);
        $restaurant->image = $filename;
      }
      $restaurant->save();
      return redirect()->route('Restaurant.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Amenities  $amenities
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Amenities  $amenities
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
      $restaurant = Restaurant::find($id);
      return view('Restaurant.edit', compact('restaurant'));
  }


  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Amenities  $amenities
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //

      $restaurant = Restaurant::find($id);
      $restaurant->title = $request->title;
      $restaurant->address = $request->address;
      $restaurant->name = $request->name;
      $restaurant->email  = $request->email;
      if ($request->password != null && $request->password != '')
      {
          $restaurant->password = Hash::make($request->password);
      }

      if ($request->file('image')!=null)
      {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $destinationPath = public_path() . '/uploads';
        $filename = Str::uuid().".".$extension;
        $file->move($destinationPath,$filename);
        $restaurant->image = $filename;
      }
      $restaurant->save();
      return redirect()->route('Restaurant.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Amenities  $amenities
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
      $restaurant = Restaurant::find($id);
      $restaurant->delete();
      return redirect()->route('Restaurant.index');
  }

  public function login(Request $request)
  {
      //
      $restaurant = Restaurant::where('email', '=', $request->email)->first();
      if (!isset($restaurant))
      {
        return response()->json(['Success' => false, 'Message' => 'Account with this email does not exist!']);
      }
      else
      {
        if (Hash::check($request->password, $restaurant->password))
        {
          return response()->json(['Success' => true, 'Restaurant' => $restaurant]);
        }
        else
        {
          return response()->json(['Success' => false, 'Message' => 'Invalid username / password!']);
        }
      }
  }

  public function scanQR(Request $request)
  {
      //
      $restaurant = Restaurant::find($request->restaurant_id);
      if (!isset($restaurant))
      {
        return response()->json(['Success' => false, 'Message' => 'Invalid Restaurant!']);
      }
      $order_detail = OrderDetail::where('qr_code', '=', $request->qrcode)->first();
      if (!isset($order_detail))
      {
        return response()->json(['Success' => false, 'Message' => 'Invalid QR Code!']);
      }
      else
      {
        $order_detail->status = 'Used';
        $order_detail->save();
        $usage = new StampUse;
        $usage->restaurant_id = $restaurant->id;
        $usage->stamp_id = $order_detail->stamp_id;
        $usage->save();
        $stamp = Stamp::find($order_detail->stamp_id);
        return response()->json(['Success' => true, 'Stamp' => $stamp]);
      }
  }
}
