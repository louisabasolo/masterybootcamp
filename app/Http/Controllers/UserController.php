<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersStoreRequest;
use App\Http\Requests\UsersUpdateRequest;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /**
         * advanced select DB queries
         */
        // $users = DB::table('users')->select('name')->orderBy('name', 'asc')->get();


        $users = DB::table('users')->get();

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UsersStoreRequest $request)
    {
        $inputs = $request->all();

        $data = $request->safe()->merge($inputs)->merge(['created_at' => Carbon::now()])->except(['_token', '_method', 'password_confirmation']);

        DB::table('users')->insert($data);

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = DB::table('users')->find($id);
        return view('users.show', compact('user'));
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
    public function update(UsersUpdateRequest $request, string $id)
    {
        $inputs = $request->all();

        $data = $request->safe()->merge($inputs)->except(['_token', '_method', 'password_confirmation']);

        DB::table('users')->where('id', $id)->update($data);

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('users')->where('id', $id)->delete();

        return redirect()->back();
    }

    public function dummy(){
        // DB::table('users')->truncate();
        // $users = Storage::json('public/users.json');

        //  foreach($users as $user) {
        //     $password = $user['email'] . $user['username'];
        //     $createdAt = Carbon::now()->addHours(rand(1,23));
        //     DB::table('users')->insert([
        //         'name' => $user['name'],
        //         'email' => $user['email'],
        //         'password' => Hash::make($password),
        //         'created_at' => $createdAt,
        //         'updated_at' => $createdAt->addHours(rand(2,3))
        //     ]);
        // }

        // return redirect()->route('users.index');
        DB::table('users')->truncate();
        $faker = Factory::create();
        for($i = 0; $i<100; $i++){
            $createdAt = Carbon::now()->addHours(rand(1,23));
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'email_verified_at' => now(),
                'password' => Hash::make($faker->password(8)),
                'remember_token' => Str::random(10),
                'created_at' => $createdAt,
                'updated_at' => $createdAt->addHours(rand(2,3))
        ]);
        };

        return redirect()->route('users.index');
    }
}
