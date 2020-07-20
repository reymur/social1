<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->id ? User::where('id', $request->id)->get() : false;

        if($user->count() < 1) return abort(404);

        return view('template.users.index', compact('user'));
    }
}
