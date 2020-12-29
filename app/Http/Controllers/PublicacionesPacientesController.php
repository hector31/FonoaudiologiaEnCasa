<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Pacientes;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\publicaciones_pacientes;

class PublicacionesPacientesController extends Controller
{
    
    
    public function store(User $user){
        // dd($inputs);
        // $this->authorize('create',Post::class);
        $inputs =request()->validate([
            'title'=>'required|min:4|max:255',
            'paciente_id'=>'required',
            'post_image'=>'file',
            'body'=>'required',
            'description'=>'required'
        ]);
        if(request('post_image')){
            $inputs['post_image']=request('post_image')->store('images_posts_pacientes');
        
        }
        // $paciente_post = PublicacionesPacientesController::create($inputs);
        publicaciones_pacientes::create($inputs);
        // auth()->user()->publicacion_paciente()->create($inputs);
       // session()->flash('post-created-message','Post with title was created '. $inputs['post_image']);//session se puede utiliza como un metodo estatico no se necesita llamarlo
       // Session::flash('project-created-message','El post del proyecto con titulo '.$inputs['title'].' fue creado');
        session()->flash('post-created-message','La publicacion '.$inputs['title'].' fue creada exitosamente');

        return back();
    }

    public function edit(publicaciones_pacientes $post,User $user){
        // $this->authorize('view',$post);
        
        return view('admin.pacientes.edit',['post'=>$post,'user'=>$user]);
    }
    public function show(User $user){
        // $this->authorize('view',$post);
        $posts=$user->publicacion_paciente()->orderBy('created_at', 'DESC')->get();
        return view('admin.pacientes.show-publicacion',['posts'=>$posts,'user'=>$user]);
    }
    public function show_one(publicaciones_pacientes $post){
        // $this->authorize('view',$post);
        return view('admin.pacientes.show-one-publicacion',['post'=>$post]);
    }
    public function show_mis_publicaciones(){
        $user=auth()->user();
        $posts=$user->publicacion_paciente()->orderBy('created_at', 'DESC')->get();
        return view('admin.pacientes.show-publicacion',['posts'=>$posts,'user'=>$user]);
    }

    public function update(publicaciones_pacientes $post,User $user){
        $inputs=request()->validate([
            'title'=>'required|min:8|max:255',
            // 'post_image'=>'mimems:jpeg,bmp,png',//si se quiere solo cierto tipo de documentos a subir
            'post_image'=>'file',//admite todos los documentos pdf imagenes etc
            'body'=>'required',
            'description'=>'required'
        ]);
        if(request('post_image')){
            $inputs['post_image']=request('post_image')->store('images');
            $post->post_image=$inputs['post_image'];
        }
        
        $post->title=$inputs['title'];
        $post->body=$inputs['body'];
        $post->description=$inputs['description'];

        $post->update();
        session()->flash('post-updated-message','La publicacion fue actualizada '. $inputs['title']);//session se puede utiliza como un metodo estatico no se necesita llamarlo


        $posts=$user->publicacion_paciente()->orderBy('created_at', 'DESC')->get();
        return view('admin.pacientes.publicaciones',[
            'user'=>$user,
            'posts'=>$posts
            ]);
    }
    public function destroy(publicaciones_pacientes $post){
        // $this->authorize('delete',$post);
        $image1_path=str_replace("http://127.0.0.1:8000",public_path(),$post->post_image);
        $image1_path=str_replace("\\",'/',$image1_path);
        // dd($image1_path);
        File::delete($image1_path);
        Session::flash('message','La publiacion fue eliminada '.$image1_path);
        $post->delete();
        return back();
    }

}
