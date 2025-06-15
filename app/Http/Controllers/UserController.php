<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function listUsers(){
        $users = User::get();
        return view('panelAdmin.users.listUser',compact('users'));

    }
    public function create(){
        return view('panelAdmin.users.create');
    }
    public function destroy($id){
        $user=User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }
    public function trashedUsers(){
        $users = User::onlyTrashed()->get();
        return view('panelAdmin.users.trashedUser',compact('users'));
    }
    public function clearAll(Request $request,$id){
        $user = User::onlyTrashed()->findOrFail($id);
        $user->forceDelete();
        return redirect()->route('users.index');
    }
    public function restore(Request $request,$id){
        $user = User::onlyTrashed()->findOrFail($id);
        $user->restore();
        return redirect()->route('users.index');
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('panelAdmin.users.edit',compact('user'));

    }
}
