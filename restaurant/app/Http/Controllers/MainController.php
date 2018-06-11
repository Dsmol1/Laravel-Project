<?php

namespace App\Http\Controllers;

use App\Main;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMainRequest;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $mains = Main::latest()->paginate(5);
      return view('admin.mains.mains', compact('mains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.forms.formMain');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMainRequest $request)
    {
      Main::create([
      'title' => $request->input('title'),
    ]);
      return redirect()->route('mains.index')->with('success', 'Sekcija pridėta sėkmingai!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function show(Main $main)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function edit(Main $main)
    {
      // $dishes = Dish::all();
      // $mains = Main::all();
      return view('admin.forms.formMain', compact('main'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMainRequest $request, Main $main)
    {
      $main->update([
      'title' => $request->input('title')
    ]);
        return redirect()->route('mains.index')->with('success', 'Sekcija redaguota sėkmingai!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function destroy(Main $main)
    {
      $main->delete();
      return redirect()->route('mains.index')->with('danger', 'Sekcija ištrinta sėkmingai!');
    }
}
