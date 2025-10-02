<?php

namespace App\Http\Controllers;
use Illuminate\support\facades\DB;

use Illuminate\Http\Request;

class userController extends Controller
{
    function login()
    {
        if(isset($_POST['login']))
        {
           
             $personID = DB::table('person')->where([
                ['username', '=', request('username')],
                ['password', '=', request('password')]
            ])->count();
            if($personID > 0)
            {
                return redirect('login')->with('message', 'login successful');
            }
            else
            return redirect('login')->with('message', 'username or password incorrect');
        }
    }
    function register()
    {
        if(isset($_POST['submit']))
        {
           if(empty(request('fname'))||empty(request('username'))||empty(request('password')))
           {
               return redirect('/register')->with('message',"some required fields are empty");
           }
            else
            {
                $user = DB::table('person')->where('username',request('username'))->count();
                if($user>0)
                {
                    return redirect('/register')->with('message',"username already exists...");
                }
                $query = DB::table('person')->insert([
                    [
                        'titleID' => '2',
                        'username' => request('username'),
                        'password' => request('password'),
                        'firstName' => request('fname'),
                        'lastName' => request('lname'),
                        'phoneNumber' => request('mobile'),
                        'email' => request('email')
                    ]
                ]);
                return redirect('login')->with('message', 'account created successfully');
            }
        }
    }
}
