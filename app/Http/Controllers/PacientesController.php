<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Pacientes;
use Illuminate\Http\Request;
use App\publicaciones_pacientes;
use Illuminate\Support\Facades\DB;

class PacientesController extends Controller
{
    public function publicaciones(User $user){
        
        $posts=$user->publicacion_paciente()->orderBy('created_at', 'DESC')->get();
        return view('admin.pacientes.publicaciones',[
            'user'=>$user,
            'posts'=>$posts
            ]);
    }
    public function index(){
       
        $fonos=User::join('role_user', 'users.id', '=', 'role_user.user_id')
        ->where('role_user.role_id',1)
        // ->where('role_user.role_id',2)
        ->select('users.*')
        ->get();
        $fono_paciente = DB::table('fono_paciente')->get();

        $users = DB::table('users')
        ->join('role_user', 'users.id', '=', 'role_user.user_id')
        ->where('role_user.role_id',3)
        ->orderBy('created_at', 'DESC')
        ->select('users.*')
        ->get();

        return view('admin.pacientes.index',[
            'users'=>$users,
            'fonos'=>$fonos,
            'fono_paciente'=>$fono_paciente
            ]);
    }


    public function show(User $user){
        
        $fonos=User::join('role_user', 'users.id', '=', 'role_user.user_id')
        ->where('role_user.role_id',1)
        // ->where('role_user.role_id',2)
        ->select('users.*')
        ->get();
        $fono_paciente = DB::table('fono_paciente')->get();
        return view('admin.pacientes.profile',[
            'user'=>$user,
            'roles'=>Role::all(),
            'fonos'=>$fonos,
            'fono_paciente'=>$fono_paciente
            ]);
    }

    public function attach(User $user){
        // dd($user);
        // dd(request('role'));
        $user->pacientes()->attach(request('paciente'));

        return back();
    }
    public function detach(User $user){
        $user->pacientes()->detach(request('paciente'));
        return back();
    }
    

    










}
