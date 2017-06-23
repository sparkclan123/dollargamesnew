<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AuthController extends Controller
{
    public function getLogin(){
        return view('auths.login');
    }

    public function postLogin(){
      $input = request()->except(['_token']); 

      if (auth()->attempt($input)){
          return redirect()-> intended('/deposit');
      }else{
          abort(401);
      }
    
    }

    public function logout(){
        auth()->logout();

        return redirect('deposit');

    }

    public function register(){
        return view('auths.register');
        //return 'register';
    }

    public function store(Request $request)
    {
                //$input = request()->email;
                //return $input;

                $name = request('name');
                $email = request('email');
                $password = bcrypt(request('password'));
                $status = request('status');  
                  
                DB::table('users')->insert([
                    'name' => $name,
                    'email' => $email,
                    'password' => $password,
                    'status' => $status

                ]);
                $users = DB::table('users')
                ->paginate(5);


                return redirect('deposit');


           


            

    }

}