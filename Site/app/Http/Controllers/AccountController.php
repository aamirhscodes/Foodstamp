<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Category;
use App\Models\Customer;
use App\Models\CustomerAddress;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductPrice;
use App\Models\ProductPriceOption;
use App\Models\User;
use App\Models\Variation;
use App\Models\VariationOption;
use Auth;
use Hash;

use Carbon\Carbon;


class AccountController extends Controller
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

    public function profile()
    {
        return view('account.profile');
    }

    public function profileSave(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->company = $request->company;
        $user->registration_number = $request->registration_number;
        $user->save();

        return redirect()->back()->with("success","Profile updated successfully!");
    }



    public function orders()
    {
        return view('account.orders');
    }

    public function address()
    {
      $addresses = CustomerAddress::where('customer_id', '=', Auth::user()->id)->get();
      return view('account.address', compact('addresses'));
    }

    public function basket()
    {
        return redirect()->route('cart');
    }

    public function help()
    {
        return redirect()->route('contact');
    }

    public function addressAdd()
    {
        return view('account.address.add');
    }

    public function changePassword()
    {
        return view('account.password');
    }

    public function changePasswordSave(Request $request)
    {
      if (!(Hash::check($request->current_password, Auth::user()->password))) {
            return redirect()->back()->with("error","Your current password does not match with your existing password.");
        }

        if(strcmp($request->current_password, $request->new_password) == 0){
            return redirect()->back()->with("error","New Password cannot be same as your current password.");
        }

        $validatedData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->new_password);
        $user->save();

        return redirect()->back()->with("success","Password successfully changed!");
    }





    public function addressAddPost(Request $request)
    {
        $a = new CustomerAddress;
        $a->customer_id = Auth::user()->id;
        $a->address_label = $request->address_label;
        $a->street = $request->street;
        $a->city = $request->city;
        $a->state = $request->state;
        $a->county = $request->county;
        $a->postcode = $request->postcode;
        $a->name = $request->name;
        $a->contact = $request->contact;
        $a->save();
        return redirect()->route('address');
    }

    public function addressEdit($id)
    {
      $a = CustomerAddress::find($id);
      return view('account.address.edit', compact('a'));
    }

    public function addressEditPost(Request $request)
    {
        $a = CustomerAddress::find($request->address_id);
        $a->address_label = $request->address_label;
        $a->street = $request->street;
        $a->city = $request->city;
        $a->state = $request->state;
        $a->county = $request->county;
        $a->postcode = $request->postcode;
        $a->name = $request->name;
        $a->contact = $request->contact;
        $a->save();
        return redirect()->route('address');
    }

    public function addressDelete($id)
    {
      $a = CustomerAddress::find($id);
      $a->delete();
      return redirect()->route('address');
    }

}
