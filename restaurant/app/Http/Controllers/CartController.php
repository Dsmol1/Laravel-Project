<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\Http\Controllers;
use App\Cart;
use App\CartItem;
use App\Dish;

class CartController extends Controller
{
    public function __construct()
    { // Tikrina ar prisijungęs
      $this->middleware('auth');
    }

    public function addItem($dishId)
    {
      $cart = Cart::where('user_id', Auth::user()->id)->first();
      if (!$cart)
      {
        $cart = new Cart();
        $cart->user_id = Auth::user()->id;
        $cart->save();
      }

      $cartItem = new CartItem();
      $cartItem->cart_id = $cart->id;
      $cartItem->dish_id = $dishId;
      $cartItem->save();

      return redirect()->back();
    }

    public function showCart(Cart $cart)
    {
      $cart = Cart::where('user_id', Auth::user()->id)->first();
      if (!$cart)
      {
        $cart = new Cart();
        $cart->user_id = Auth::user()->id;
        $cart->save();
      }

      $items = $cart->cartItems;
      $totalPrice = 0;
      $totalItems = 0;
      foreach ($items as $item) {
        // dd($item);
        $totalPrice += $item->dish->price;
        $totalItems = count($items);
      }
      return view('cart.indexArchie', compact('items', 'totalPrice', 'totalItems'));
    }

    public function destroy(CartItem $cartItem){
      $cartItem->delete();
      return redirect()->route('showNew.cart');
    }

    public function addItemAjax($dishId)
    {
      $cart = Cart::where('user_id', Auth::user()->id)->first();
      if (!$cart)
      {
        $cart = new Cart();
        $cart->user_id = Auth::user()->id;
        $cart->save();
      }

      $cartItem = new CartItem();
      $cartItem->cart_id = $cart->id;
      $cartItem->dish_id = $dishId;
      $cartItem->save();

      $items = $cart->cartItems;

      return response()->json(['items' => $items]);
    }
}
