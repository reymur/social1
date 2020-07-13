<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = htmlspecialchars($request->input('query'));

        if(!$query) return redirect()->route('home');

        $users = User::where( DB::raw("CONCAT (first_name,' ',last_name)"), 'like', "%{$query}%" )
                     ->orWhere('login', 'like', "%{$query}%")->get();

        return view('template.pages.search')->with([
                                                        'users' => $users,
                                                        'result' => $query
                                                    ]);
    }
}
