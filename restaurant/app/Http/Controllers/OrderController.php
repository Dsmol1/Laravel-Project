<?php
namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Order;
use App\Cart;
use App\OrderItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index(){
    $orders = Order::latest()->get();
    return view('admin.orders.orders', compact('orders'));
  }

  public function showItems(Order $order){
    return view('admin.orders.orderItems', compact('order'));
  }

  public function shipped(Order $order){
    if ($order->shipped === 1) {
      $order->update([
        'shipped' => 0
      ]);
      return redirect()->route('orders.index')->with('info', 'Order unshipped!');

    } else {
      $order->update([
        'shipped' => 1
      ]);
      return redirect()->route('orders.index')->with('success', 'Order shipped!');
    }
  }

  public function checkout()
  {
    $cart = Cart::where('user_id', Auth::user()->id)->first();

    $order = new Order();
    $items = $cart->cartItems;
    $total_paid = 0;

    foreach ($items as $item) {
      $total_paid += $item->dish->price;
    }

    $order->total_paid = $total_paid;
    $order->user_id = $cart->user_id;
    $order->save();

    $items = $cart->cartItems;
    foreach ($items as $item) {
      $orderItem = new OrderItem();
      $orderItem->dish_id = $item->dish->id;
      $orderItem->order_id = $order->id;
      $orderItem->save();
    }
    $cart->delete();
    return view('checkout.checkout');
  }
}
