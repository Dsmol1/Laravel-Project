<?php

namespace App\Http\Controllers;

use App\Dish;
use App\Main;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDishRequest;

class DishController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
      $dishes = Dish::latest()->paginate(5);
      return view('dishes.dishes', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $mains = Main::all();
        return view('admin.forms.form', compact('mains'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDishRequest $request, Dish $dish){
      Dish::create([
      'title' => $request->input('title'),
      'description' => $request->input('description'),
      'image' => $request->input('image'),
      'price' => $request->input('price'),
      'main_id' => $request->input('main_id')
    ]);
    return redirect()->route('admin.dishes')->with('success', 'Patiekalas pridėtas sėkmingai!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish){
        return view('dishes.single', compact('dish','countries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish){
      $dishes = Dish::all();
      $mains = Main::all();
      return view('admin.forms.form', compact('dish', 'mains'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(StoreDishRequest $request, Dish $dish){
      $dish->update([
      'title' => $request->input('title'),
      'description' => $request->input('description'),
      'image' => $request->input('image'),
      'price' => $request->input('price'),
      'main_id' => $request->input('main_id')
    ]);

    return redirect()->route('admin.dishes')->with('success', 'Patiekalas redaguotas sėkmingai!');
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish){
      $dish->delete();
      return redirect()->route('admin.dishes')->with('danger', 'Patiekalas sėkmingai istrintas!');
    }

    public function admin(){
      $dishes = Dish::latest()->paginate(5);
      return view('admin.dishes.dishes', compact('dishes'));
    }
}
