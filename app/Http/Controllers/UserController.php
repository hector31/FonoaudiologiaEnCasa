<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{


    public function index(){
        $users=User::orderBy('created_at', 'DESC')->get();
        return view('admin.users.index',['users'=>$users]);
    }

    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }

    public function show(User $user){
        return view('admin.users.profile',[
            'user'=>$user,
            'roles'=>Role::all()
            ]);
    }


    public function update(User $user){

        $inputs=request()->validate([
            'name'=>['required','string','max:255'],
            'email'=>['required','email','max:255'],
            'avatar'=>['file']

        ]);
        if (request('avatar')) {
            $inputs['avatar']=request('avatar')->store('images_avatar');
        }
        // dd($inputs);
        $user->update($inputs);

        return back();



       
    }

    public function attach(User $user){
        // dd($user);
        // dd(request('role'));
        $user->roles()->attach(request('role'));

        return back();
    }
    public function detach(User $user){
        $user->roles()->detach(request('role'));
        return back();
    }


    public function destroy(User $user){
        $user->delete();
        session()->flash('user-deleted','El usuario ha sido eliminado');
        return back();
    }


     
}
