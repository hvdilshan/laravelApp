<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function AddUser(Request $request)
    {

        $data = new User;

        $this->validate($request, [
            'name' => 'required|max:150|min:5',
            'address' => 'required|max:150|min:5',
            'position' => 'required|max:100|min:1'

        ]);

        $data->name = $request->name;
        $data->address = $request->address;
        $data->gender = $request->gender;
        $data->position = $request->position;
        $data->save();

        $user = User::all();
        return redirect()->back()->with('users', $user);
    }

    public function DeleteUser($id){

        $user=User::find($id);
        $user->delete();
        $user = User::all();
        return redirect()->back()->with('users', $user);
    }

    public function GetUserDetails($id) {

        $user=User::find($id);

        return view('update_user')->with('users', $user);
    }

    public function UpdateUser(Request $request){

        $this->validate($request, [
            'name' => 'required|max:150|min:5',
            'address' => 'required|max:150|min:5',
            'position' => 'required|max:100|min:1'

        ]);

        $id=$request->id;
        $name=$request->name;
        $address=$request->address;
        $gender=$request->gender;
        $position=$request->position;

        $data=User::find($id);
        $data->name=$name;
        $data->address=$address;
        $data->gender=$gender;
        $data->position=$position;

        $data->save();
        $user=User::all();
        return redirect('/')->with('users', $user);

    }
}
