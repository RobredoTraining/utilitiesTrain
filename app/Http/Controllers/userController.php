<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index() 
    {   
        return User::paginate(15);
    }
    public function search() 
    {   
        return view('search');
    }

    public function result(Request $request) 
    {   
        $request->validate([
            'name' => 'required|min:3|max:255'
        ]);

        $users = User::where('name', '%LIKE%' ,$request->name)->get();
        return view('result', compact('users'));
    }
}
