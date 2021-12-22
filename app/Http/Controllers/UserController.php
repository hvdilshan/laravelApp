<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function AddUser(Request $request)
    {

        $user = new User;

        $this->validate($request, [
            'name' => 'required|max:150|min:5',
            'address' => 'required|max:150|min:5',
            'position' => 'required|max:100|min:1'

        ]);

        $user->name = $request->name;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->position = $request->position;
        $user->save();

        $data=User::all();
        return view('index')->with('users', $data);
        //return redirect()->back();
    }
}
