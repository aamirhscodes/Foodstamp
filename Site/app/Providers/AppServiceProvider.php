<?php

namespace App\Providers;
use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Stamp;
use App\Models\Restaurant;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        if (isset($_COOKIE["cart_id"])) {
          $cart_id = $_COOKIE["cart_id"];
          $user_cart = Cart::find($cart_id);
          View::share('cart', $user_cart);
        }
    }
}
