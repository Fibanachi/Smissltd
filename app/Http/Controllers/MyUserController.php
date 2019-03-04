<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyUser;
use Illuminate\Support\Facades\Auth;


class MyUserController extends Controller
{
    public function home()
    {
        return view('register.home');
    }

    public function loginForm()
    {
        return view('register.login');
    }

    public function login(Request $request)
    {

/*        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);*/
    //dd($request->all());
        $result = Auth::attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ]);

        dd($result);

        //dd(Auth::check());
    }

    public function registerForm()
    {
        return view('register.register');
    }

    public function register(Request $request)
    {
        //dd($request->all());

        $this->validate($request,[
           'email' =>'required',
            'name' => 'required',
            'address' => 'required',
            'password' => ['required', 'confirmed', 'min:4', 'regex:/[A-Z]+/', 'regex:/[A-Z, a-z, 0-9]/']
        ]);

        $user = MyUser::add($request->all());
        $user->generatePassword($request->get('password'));

        return redirect()->route('home');
    }

    public function first()
    {
        $task = MyUser::all();
        return view('register.home', ['tasks' => $task]);
    }
}
