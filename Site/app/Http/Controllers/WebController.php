<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Stamp;
use App\Models\Restaurant;

use Carbon\Carbon;
use Auth;
use Cookie;
use DB;

class WebController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    //    public function index()
    //    {
    //        return view('home');
    //    }

    public function home(Request $request)
    {
      $stamps = Stamp::all();
      $restaurants = Restaurant::all();
      if ($request->cookie('cart_id') == null)
      {
        $user_cart = new Cart;
        $user_cart->order_amount = 0;
        $user_cart->total_amount = 0;
        $user_cart->save();
        Cookie::queue(Cookie::make('cart_id',$user_cart->id));
        return view('home', compact('stamps', 'restaurants'));
      }
      else
      {
        $cart_id = $request->cookie('cart_id');
        $cart = Cart::find($cart_id);
        return view('home', compact('stamps', 'restaurants', 'cart'));
      }

    }

    public function categoryDetails($id)
    {
      $category = Category::find($id);
      $child_categories = Category::where('parent_id', '=', $id)->get();
      $product_ids = ProductCategory::where('category_id', '=', $id)->select('product_id')->get();
      $products = Product::whereIn('id', $product_ids)->orderBy('title')->get();
      return view('categoryDetails', compact('category', 'products', 'child_categories'));
    }

    public function addToCart(Request $request)
    {
      if ($request->hasCookie('cart_id') != false)
      {
        $cart_id = $request->cookie('cart_id');
        $user_cart = Cart::find($cart_id);
        for ($i = 0; $i< $request->quantity; $i++)
        {
          $cart_product = new CartDetail;
          $cart_product->stamp_id = Stamp::where('price', '=', $request->price)->first()->id;
          $cart_product->cart_id = $cart_id;
          $cart_product->save();
        }
        $user_cart->order_amount += $request->price * $request->quantity;
        $user_cart->total_amount += $request->price * $request->quantity;
        $user_cart->save();
        return response()->json(['Success' => true, 'Total' => $user_cart->total_amount]);
      }
      else
      {
        return response()->json(['Error' => 'Cart not initialized properly! Please refresh and try again.']);
      }
    }

    public function updateCart(Request $request)
    {
      if ($request->hasCookie('cart_id') != false)
      {
        $cart_id = $request->cookie('cart_id');
        $user_cart = Cart::find($cart_id);
        $old_stamps = CartDetail::where('cart_id', '=', $cart_id)->where('stamp_id', '=', $request->stamp_id)->get();
        foreach($old_stamps as $os)
        {
          $os->delete();
        }
        $stamp = Stamp::find($request->stamp_id);
        for ($i = 0; $i< $request->quantity; $i++)
        {
          $cart_product = new CartDetail;
          $cart_product->stamp_id = $stamp->id;
          $cart_product->cart_id = $cart_id;
          $cart_product->save();
        }
        $new_cart = CartDetail::where('cart_id', '=', $cart_id)->get();
        $user_cart->order_amount = 0;
        $user_cart->total_amount = 0;
        foreach ($new_cart as $nc)
        {
          $current_stamp = Stamp::find($nc->stamp_id);
          $user_cart->order_amount += $current_stamp->price;
          $user_cart->total_amount += $current_stamp->price;
        }
        $user_cart->save();
        return response()->json(['Success' => true, 'Total' => $user_cart->total_amount]);
      }
      else
      {
        return response()->json(['Error' => 'Cart not initialized properly! Please refresh and try again.']);
      }
    }

    public function removeCart(Request $request)
    {
      if ($request->hasCookie('cart_id') != false)
      {
        $cart_id = $request->cookie('cart_id');
        $user_cart = Cart::find($cart_id);
        $old_stamps = CartDetail::where('cart_id', '=', $cart_id)->where('stamp_id', '=', $request->stamp_id)->get();
        foreach($old_stamps as $os)
        {
          $os->delete();
        }
        $new_cart = CartDetail::where('cart_id', '=', $cart_id)->get();
        $user_cart->order_amount = 0;
        $user_cart->total_amount = 0;
        foreach ($new_cart as $nc)
        {
          $current_stamp = Stamp::find($nc->stamp_id);
          $user_cart->order_amount += $current_stamp->price;
          $user_cart->total_amount += $current_stamp->price;
        }
        $user_cart->save();
        return response()->json(['Success' => true, 'Total' => $user_cart->total_amount]);
      }
      else
      {
        return response()->json(['Error' => 'Cart not initialized properly! Please refresh and try again.']);
      }
    }

    public function cart(Request $request)
    {
      if ($request->hasCookie('cart_id') != false)
      {
        $cart_id = $request->cookie('cart_id');
      	$cart = Cart::find($cart_id);
        $products = CartDetail::where('cart_id', '=', $cart->id)->groupBy('stamp_id')->select('stamp_id', DB::raw('count(*) as total'))->get();
        foreach ($products as $p)
        {
          $p->Stamp = Stamp::find($p->stamp_id);
        }
        return view('cart', compact('cart', 'products'));
      }
      else
      {
        return redirect()->route('home');
      }
    }

    public function checkout(Request $request)
    {
      if ($request->hasCookie('cart_id') != false)
      {
        $cart_id = $request->cookie('cart_id');
      	$cart = Cart::find($cart_id);
        $products = CartDetail::where('cart_id', '=', $cart->id)->groupBy('stamp_id')->select('stamp_id', DB::raw('count(*) as total'))->get();
        foreach ($products as $p)
        {
          $p->Stamp = Stamp::find($p->stamp_id);
        }
        return view('checkout', compact('cart', 'products'));
      }
      else
      {
        return redirect()->route('home');
      }
    }

    public function placeOrder(Request $request)
    {
      try {
        $cart_id = $request->cookie('cart_id');
      	$cart = Cart::find($cart_id);
        $products = CartDetail::where('cart_id', '=', $cart->id)->get();
        $total_amount = $cart->total_amount;
        $order = new Order;
        $order->status = 'New';
        $order->order_amount = $cart->order_amount;
        $order->total_amount = $total_amount;
        $order->name = $request->fname .' '.$request->lname;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->shipping_address = $request->address1 .', '.$request->address2.', '.$request->city.', '.$request->postcode;
        $order->save();

        foreach ($products as $p)
        {
          $op = new OrderDetail;
          $op->order_id = $order->id;
          $op->stamp_id  = $p->stamp_id;
          $stamp = Stamp::find($p->stamp_id);
          $op->qr_code = '';
          $op->price = $stamp->price;
          $op->save();
        }

        $old_stamps = CartDetail::where('cart_id', '=', $cart_id)->get();
        foreach($old_stamps as $os)
        {
          $os->delete();
        }
        $cart->delete();
        Cookie::queue(Cookie::forget('cart_id'));
        return redirect()->route('checkoutSuccess');

      } catch (\Exception $e) {
          return redirect()->back()->with('error', $e->getMessage());
      }
    }

    public function checkoutSuccess(Request $request)
    {
      return view('checkoutSuccess');
    }

}
