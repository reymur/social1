<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendsController extends Controller
{
    public function index()
    {
        $friends = Auth::user()->friends();
        $requests = Auth::user()->friendRequest();

        return view('template.friends.index', compact('friends','requests'));
    }
}
