<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::latest()->paginate(5);
      return view('admin.users.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.forms.formUsers');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      User::create([
      'name' => $request->input('name'),
      'surname' => $request->input('surname'),
      'date_of_birth' => $request->input('date_of_birth'),
      'phone_number' => $request->input('phone_number'),
      'email' => $request->input('email'),
      'password' => Hash::make($request->input('password')),
      'address' => $request->input('address'),
      'city' => $request->input('city'),
      'zip_code' => $request->input('zip_code'),
      'country' => $request->input('country')
    ]);
      return redirect()->route('users.index')->with('success', 'Vartotojas pridėtas sėkmingai!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showOrders()
    {
      $orders = Order::latest()->get();
      return view('userProfile.order', compact('orders'));
    }

    public function showOrderItems(Order $order)
    {
      return view('userProfile.orderItems', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(User $user)
    {
        return view('admin.forms.formUsers', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
      $user->update([
        'name' => $request->input('name'),
        'surname' => $request->input('surname'),
        'date_of_birth' => $request->input('date_of_birth'),
        'phone_number' => $request->input('phone_number'),
        'email' => $request->input('email'),
        'address' => $request->input('address'),
        'city' => $request->input('city'),
        'zip_code' => $request->input('zip_code'),
        'country' => $request->input('country'),
        'admin' => $request->input('admin'),
      ]);
        return redirect()->route('users.index')->with('success', 'Vartotojas redaguotas sėkmingai!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
      $user->delete();
      return redirect()->route('users.index')->with('danger', 'Vartotojas sėkmingai ištrintas!');
    }

}
