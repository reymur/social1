<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Http\Request;
use Auth;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(RegisterRequest $request)
    {
        $is_created = $this->createNewUser($request);

        if($is_created){
            return redirect()->route('home')->with('info', 'You have successfully registered');
        }

        return redirect()->route('home')->with('danger', 'Wops!!!');

    }

    public function createNewUser($request)
    {
        $user = User::create([
            'login' => $request->login,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return $user ?? false;
    }
}
