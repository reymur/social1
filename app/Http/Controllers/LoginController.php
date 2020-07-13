<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        if( !Auth::attempt($request->only(['login','password']), $request->has('remember')) ){
            return redirect()->back()->with('danger', 'Incorrect Login or password!');
        }

        return redirect()->route('home')
               ->with('info', 'Dear '. Auth::user()->login .' you have successfully login');
    }
}
