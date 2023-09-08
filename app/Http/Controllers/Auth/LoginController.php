<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('auth.login');
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
    public function login(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        if($user){

            if (Hash::check($request->password, $user->password)) {
                Auth::login($user);
                return redirect()->route('user.dashboard');
            }
            else{
                return "password dosn't match";
            }


        }
}

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
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
