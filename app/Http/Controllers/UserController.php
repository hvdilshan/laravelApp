<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function AddUser(Request $request)
    {

        $user = new User;

        $user->name = $request->name;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->position = $request->position;
        $user->save();
        return redirect()->back();
    }
}
