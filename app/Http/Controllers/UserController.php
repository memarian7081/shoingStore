<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function listUsers(){
        $users = User::get();
        return view('users.listUser',compact('users'));

    }
    public function destroy($id){
        $user=User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }
    public function trashedUsers(){
        $users = User::onlyTrashed()->get();
        return view('users.trashedUser',compact('users'));
    }
    public function clearAll(Request $request,$id){
        $user = User::onlyTrashed()->findOrFail($id);
        $user->forceDelete();
        return redirect()->route('users.index');
    }
}
