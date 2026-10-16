<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return session()->all();
        // return $request->session()->get('name');
    }

    public function set(Request $request){
        $query = $request->query();
        // session($query);
        // $request->session()->put($query);
        // session(['cars' => ['BMW', 'Lexus', 'Mercedes', 'Ferrari']]);
        // session()->push('cars', 'Toyota');

        $cars = ['BMW', 'Lexus', 'Mercedes', 'Ferrari'];
        session(['cars'=>collect($cars)]);
        return "session is set";
    }

    public function delete(){
        // session()->forget('email');

        /**
         * Remove a specific item or items from an array in sessions
         */
        // session()->put('cars', array_diff(session()->get('cars'), ['Toyota']));

        $car = session('cars')->search('Lexus');
        session('cars')->forget($car);
        return "Session removed";
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
