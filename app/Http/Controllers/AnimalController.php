<?php

namespace App\Http\Controllers;

use App\Models\animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
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
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\animal  $animal
   * @return \Illuminate\Http\Response
   */
  public function show(animal $animal)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\animal  $animal
   * @return \Illuminate\Http\Response
   */
  public function edit(animal $animal)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\animal  $animal
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, animal $animal)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\animal  $animal
   * @return \Illuminate\Http\Response
   */
  public function destroy(animal $animal)
  {
    //
  }
  //
  public function cat()
  {
    $cat = Animal::where('category', 'cat')->orderBy('created_at', 'desc')->get();
    return view('cat', compact('cat'));
  }
  public function dog(animal $animal)
  {
    return Animal::where('category', 'dog')->orderBy('created_at', 'desc')->get();
  }
  public function list(animal $animal)
  {
    return Animal::where('category', 'others')->orderBy('created_at', 'desc')->get();
  }
}