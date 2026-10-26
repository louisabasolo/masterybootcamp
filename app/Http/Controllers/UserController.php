<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function show()
    {
        return view('welcome');
    }

    public function index()
    {
        /**
         * Adding resource to the database
         * via Controller
         */
        // DB::table('users')->insert([
        //     'name' => 'Haeir',
        //     'email' => 'haeir@gmail.com',
        //     'password' => Hash::make('H@ier2026_'),
        //     'created_at' => Carbon::now()
        // ]);

        // return 'User added to the database';

        /**
         * Getting resource from database
         */
        // $users = DB::table('users')->get();

        // return $users;

        /**
         * Update
         */
        // DB::table('users')->where('id', 5)->update([
        //     'name' => 'Prettier',
        //     'created_at' => Carbon::now()
        // ]);
        // return 'User data updated';

        /**
         * Delete a resource
         */
        // DB::table('users')->where('id', 5)->delete();
        // return 'deleted';

        /**
         * Delete all from the database
         */
        // DB::table('users')->truncate();
        // return 'All data deleted';

    //    $users = Storage::json('public/users.json');
        $users = DB::table('users')->get();

        foreach($users as $user) {
            // $password = $user['email'] . $user['username'];
            // $createdAt = Carbon::now()->addHours(rand(1,23));
            // DB::table('users')->insert([
            //     'name' => $user['name'],
            //     'email' => $user['email'],
            //     'password' => Hash::make($password),
            //     'created_at' => $createdAt,
            //     'updated_at' => $createdAt->addHours(rand(2,3))
            // ]);

            echo "<br>";
            echo "<strong> Name: </strong>" . $user->name;
            echo "<br>";
            echo $user->created_at;
            echo "<br>";
            echo Carbon::parse($user->created_at)->diffForHumans();
            echo "<br>";
            echo $user->password;
            echo "<br>";
            echo "<br>";

        }

        return 'Users added to the database';

    }
}
