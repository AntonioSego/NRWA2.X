<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index',['users'=>$users]);
        return view('users.index');
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $data  = $request->validate([
            
        'username'  => 'required',
        'password' => 'required'

        ]);

        $new_data  = User::create($data);

        return redirect(route('user.index'));

    }
    public function edit(User $user){
        return view('users.edit',['user' => $user]);
    }

    public function update(User $user,Request $request){
        $data  = $request->validate([
            
            'username'  => 'required',
            'password' => 'required'

            ]);

            $user->update($data);
            return redirect(route('user.index'))->with('succes','Uspjesno uredjen');
            
    }

    public function destroy(User $user){
        $user->delete();
        return redirect(route('user.index'))->with('succes','Uspjesno izbrisan');
        
    }
}
