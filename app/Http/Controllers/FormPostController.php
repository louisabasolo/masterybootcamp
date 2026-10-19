<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form-posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(PostFormRequest $request)
    // {
    //     // $validatedData = $request->validate([
    //     //     'title' => 'required|max:50',
    //     //     'body' => 'required'
    //     // ]);

    //     dd($request->validated());

    // }

    /**
     * Validating through validator facade
     */
    public function store(Request $request){
    // $validation = Validator::make($request->all(), [
    //     'title' => 'required|max:50',
    //     'body' => 'required'
    //     ]);
        // if($validation->fails()){
        //     return redirect()->route('form-posts.create')->withErrors($validation)->withInput();
        // }

        // $validated = $validation->validated();

            // $inputs = $request->all();
            // $rules = [
            //     'title' => 'required|max:50',
            //     'body' => 'required'
            // ]

        //    $validated = Validator::make($request->all(), [
        //         'title' => 'required|max:50',
        //         'body' => 'required'
        //    ])->validate();
        
        $inputs = $request->all();
        $rules = [
            'title' => 'required',
            'body' => 'required'
        ];
        $message = ['required' => 'Please input :attribute'];

        $validated = Validator::make($inputs, $rules, $message)->validate();
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
