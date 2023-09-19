<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    // Create Index
    public function index (){
        $users = User::paginate(3); 
        return view('users.index',compact('users'));
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){

        $user = new User;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->role = 1;
        $user->save();

        return redirect('/users');

    }

    public function destroy($id){
        // echo json_encode($id);
        $user = User::findOrFail($id)->destroy($id);
    }
}