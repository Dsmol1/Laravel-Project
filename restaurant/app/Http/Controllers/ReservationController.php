<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Mail\ReservationCompleted;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationValidation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;



class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $reservations = Reservation::latest()->paginate(5);
      return view('admin.reservations.reservations', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.forms.formReservations');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationValidation $request)
    {
      $reservation = Reservation::create([
      'name' => $request->input('name'),
      'surname' => $request->input('surname'),
      'email' => $request->input('email'),
      'people' => $request->input('people'),
      'phone' => $request->input('phone'),
      'date' => $request->input('date'),
      'time' => $request->input('time'),
      'message' => $request->input('message')
    ]);

    Mail::to($request->email)->send(new ReservationCompleted($reservation));

    if (Auth::check() && Auth::user()->isAdmin()) {
      return redirect()->route('reservations.index')->with('success', 'Rezervacija užregistruota.');
    }
      return redirect()->route('home')->with('success', 'Rezervacija užregistruota.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        return view('admin.forms.formReservations', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(ReservationValidation $request, Reservation $reservation)
    {
      $reservation->update([
        'name' => $request->input('name'),
        'surname' => $request->input('surname'),
        'email' => $request->input('email'),
        'people' => $request->input('people'),
        'phone' => $request->input('phone'),
        'date' => $request->input('date'),
        'time' => $request->input('time')
      ]);
      return redirect()->route('reservations.index')->with('success', 'Rezervacija redaguota sėkmingai!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
      $reservation->delete();
      return redirect()->route('reservations.index')->with('danger', 'Rezervacija ištrinta sėkmingai!');
    }
}
