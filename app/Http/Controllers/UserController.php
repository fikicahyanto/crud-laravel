<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    //

    function index()
    {

        $data['module'] = "Module User";
        $data['user']= User::all();
        
        return view('user.index',$data);
    }

    function create()
    {
        return view('user.create');
    }

    function store(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users|max:20',
            'name' => 'required',
            'password' => 'required|min:5'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->email;
        $user->save();

        return redirect('user')->with('message','berhasil menambahkan data');
    }

    function edit($id)
    {
        $data['user'] = User::find($id);
        return view('user.edit',$data);
    }

    function update(Request $request,$id)
    {
        $request->validate([
            'email' => 'required|unique:users|max:20',
            'name' => 'required',
            'password' => 'required|min:5'
        ]);

        $user           = User::find($id);
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = $request->email;
        $user->update();
        return redirect('user')->with('message','berhasil menambahkan data');
    }
}
